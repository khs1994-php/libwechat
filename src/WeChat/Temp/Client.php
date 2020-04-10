<?php

declare(strict_types=1);

namespace WeChat\Temp;

use WeChat\Support\Response;
use WeChat\WeChat;

/**
 * Class Temp.
 *
 * 临时素材
 *
 * @see https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1444738726
 */
class Client
{
    const ADD = 'https://api.weixin.qq.com/cgi-bin/media/upload?';

    private $access_token;

    private $curl;

    /**
     * Temp constructor.
     *
     * @throws \Exception
     */
    public function __construct(WeChat $app)
    {
        $this->access_token = $app->access_token->get();

        $this->curl = $app->curl;
    }

    /**
     * 新增临时素材.
     *
     * @see   https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1444738726
     *
     * @param string $file 文件路径
     * @param string $type 文件类型 图片（image）、语音（voice）、视频（video）和缩略图（thumb，主要用于视频与音乐格式的缩略图）
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function add(string $file, string $type)
    {
        $url = self::ADD.$this->access_token.'&'.http_build_query([
                'type' => $type,
            ]);
        $this->curl->setOpt(CURLOPT_SAFE_UPLOAD, true);
        $data = $this->curl->post($url, [
            'media' => new \CURLFile($file),
        ]);

        return Response::json($data);
    }

    /**
     * 获取临时素材.
     *
     * @see   https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1444738727
     *
     * @param  $media_id
     *
     * @return mixed
     */
    public function download($media_id)
    {
        $url = 'https://api.weixin.qq.com/cgi-bin/media/get?'.$this->access_token.'&media_id='.$media_id;

        return $this->curl->get($url);
    }
}
