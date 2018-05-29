<?php

namespace WeChat\Message;

/**
 * 一次性订阅消息
 *
 * TODO
 *
 * 不支持测试号
 *
 * @link https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1500374289_66bvB
 */
class Subscribe
{
    const BASE_URL = 'https://mp.weixin.qq.com/mp/subscribemsg?action=get_confirm&';

    const SEND_URL = 'https://api.weixin.qq.com/cgi-bin/message/template/subscribe?';

    private $appid;

    private $openid;

    private $access_token;

    private $template_id;

    private $scene;

    private $curl;

    private static $subscribe;

    private function __construct($scene, $template_id, $redirect_url, Curl $curl)
    {
        $this->appid = env('WECHAT_APPID');
        $this->access_token = AccessToken::accessToken()->get();
        $this->scene = $scene;
        $this->template_id = $template_id;
        $this->redirect_url = 'https://wechat.developer.khs1994.com';
        $this->curl = $curl;
    }

    public static function subscribe($scene, $template_id, $redirect_url)
    {
        if (!(self::$subscribe instanceof self)) {
            self::$subscribe = new self($scene, $template_id, $redirect_url);
        }

        return self::$subscribe;
    }

    public function confirm()
    {
        $data = [
            'appid' => $this->appid,
            'scene' => $this->scene,
            'template_id' => $this->template_id,
            'redirect_url' => $this->redirect_url,
            'reserved' => 'test',
        ];

        $url = self::BASE_URL.http_build_query($data).'#wechat_redirect';

        return redirect($url);
    }

    public function callback()
    {
        $get = Request::all();
        $action = $get['action'];
        if ($action === 'confirm') {
            $this->openid = $get['openid'];
            $this->template_id = $get['template_id'];
            $this->scene = $get['scene'];
            $this->send('一次性订阅消息');
        }
    }

    private function send($title)
    {
        $url = self::SEND_URL.$this->access_token;
        $data = [
            'touser' => $this->openid,
            'template_id' => $this->template_id,
            'url' => $url,
            'scene' => $this->scene,
            'title' => $title,
            'data' => [

            ]
        ];

        return $this->curl->post($url, $data);
    }

}
