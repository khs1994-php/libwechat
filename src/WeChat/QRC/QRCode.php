<?php

namespace WeChat\QRC;

use Curl\Curl;
use WeChat\WeChat;

class QRCode
{
    /**
     * 微信服务器根地址
     */
    const WECHAT = 'https://api.weixin.qq.com/cgi-bin/';

    /**
     * 创建二维码地址
     */
    const CREATE = self::WECHAT.'qrcode/create?';

    /**
     * 获取二维码地址
     */
    const SHOW = self::WECHAT.'showqrcode?';

    /**
     * @var string
     */
    private $access_token;

    /**
     * @var Curl
     */
    private $curl;

    private static $qrcode;

    public function __construct(WeChat $app)
    {
        $this->access_token = $app->access_token->get();
        $this->curl = $app['curl'];
    }

    /**
     * 创建永久二维码
     *
     * @param string $data
     * @param bool   $strType
     *
     * @return string
     * @throws \Exception
     */
    public function createForever(string $data, bool $strType = true)
    {
        return $this->create($data, true, $strType);
    }

    /**
     * 创建临时二维码
     *
     * @param string $data
     * @param bool   $strType
     *
     * @return string
     * @throws \Exception
     */
    public function createTemp(string $data, bool $strType = true)
    {
        return $this->create($data, false, $strType);
    }

    /**
     * 主函数
     *
     * @param string $data
     * @param bool   $forever
     * @param bool   $strType
     *
     * @return string
     * @throws \Exception
     */
    private function create(string $data, bool $forever = true, bool $strType = true)
    {
        $url = self::CREATE.$this->access_token;
        $content = $forever ? $this->forever($data, $strType) : $this->temporary($data, $strType);
        $res = json_decode($this->curl->post($url, json_encode($content)), true);
        $ticket = urlencode($res['ticket']);
        $url = self::SHOW.http_build_query(['ticket' => $ticket]);

        DB::insert('insert qr values(null,?,?,?,?)', [$forever, $ticket, $url, $data]);

        /*

          CREATE TABLE qr (
          `id`      INT AUTO_INCREMENT,
          `forever` VARCHAR(10)  NOT NULL,
          `ticket`  VARCHAR(100) NOT NULL,
          `url`     VARCHAR(100) NOT NULL,
          `data`    VARCHAR(100) NOT NULL,
           KEY (`id`)
           );

        */

        return $url;
    }

    /**
     * 永久二维码请求体
     *
     * @param $data
     * @param $strType
     *
     * @return array
     */
    private function forever($data, $strType)
    {
        $action_name = $strType ? 'QR_LIMIT_STR_SCENE' : 'QR_LIMIT_SCENE';
        $scene_type = $strType ? 'scene_str' : 'scene_id';

        $content = [
            'action_name' => $action_name,
            'action_info' => [
                'scene' => [$scene_type => $data,],
            ],
        ];

        return $content;
    }

    /**
     * 临时二维码请求体
     *
     * @param      $data
     * @param bool $strType
     *
     * @return array
     */
    private function temporary($data, bool $strType)
    {
        $action_name = $strType ? 'QR_STR_SCENE' : 'QR_SCENE';
        $scene_type = $strType ? 'scene_str' : 'scene_id';

        $content = [
            'expire_seconds' => 604800,
            'action_name' => $action_name,
            'action_info' => [
                'scene' => [$scene_type => $data,]
                ,]
            ,];

        return $content;
    }
}
