<?php

declare(strict_types=1);

namespace WeChat\QRC;

use Curl\Curl;
use WeChat\WeChat;

class Client
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

    /**
     * QRCode constructor.
     *
     * @param WeChat $app
     *
     * @throws \Exception
     */
    public function __construct(WeChat $app)
    {
        $this->access_token = $app->access_token->get();
        $this->curl = $app['curl'];
    }

    /**
     * 创建永久二维码
     *
     * @param      $data
     * @param bool $isString
     *
     * @return string
     *
     * @throws \Exception
     */
    public function createForever($data, bool $isString = true)
    {
        return $this->create($data, true, $isString);
    }

    /**
     * 创建临时二维码
     *
     * @param      $data
     * @param bool $isString
     *
     * @return string
     *
     * @throws \Exception
     */
    public function createTemp($data, bool $isString = true)
    {
        return $this->create($data, false, $isString);
    }

    /**
     * 主函数.
     *
     * @param      $data
     * @param bool $forever
     * @param bool $isString
     *
     * @return string
     *
     * @throws \Exception
     */
    private function create($data, bool $forever = true, bool $isString = true)
    {
        $url = self::CREATE.$this->access_token;
        $content = $forever ? $this->forever($data, $isString) : $this->temporary($data, $isString);
        $res = json_decode($this->curl->post($url, json_encode($content)), true);
        $ticket = urlencode($res['ticket']);
        $url = self::SHOW.http_build_query(['ticket' => $ticket]);

        return $url;
    }

    /**
     * 永久二维码请求体.
     *
     * @param      $data
     * @param bool $isString
     *
     * @return array
     */
    private function forever($data, bool $isString)
    {
        $action_name = $isString ? 'QR_LIMIT_STR_SCENE' : 'QR_LIMIT_SCENE';
        $scene_type = $isString ? 'scene_str' : 'scene_id';

        $content = [
            'action_name' => $action_name,
            'action_info' => [
                'scene' => [$scene_type => $data],
            ],
        ];

        return $content;
    }

    /**
     * 临时二维码请求体.
     *
     * @param      $data
     * @param bool $isString
     *
     * @return array
     */
    private function temporary($data, bool $isString)
    {
        $action_name = $isString ? 'QR_STR_SCENE' : 'QR_SCENE';
        $scene_type = $isString ? 'scene_str' : 'scene_id';

        $content = [
            'expire_seconds' => 604800,
            'action_name' => $action_name,
            'action_info' => [
                'scene' => [$scene_type => $data], ], ];

        return $content;
    }
}
