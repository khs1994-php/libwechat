<?php

declare(strict_types=1);

namespace WeChat\Message;

use WeChat\Kernel\Support\Response;
use WeChat\WeChat;

/**
 * 一次性订阅消息.
 *
 * TODO
 *
 * 不支持测试号
 *
 * @see https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1500374289_66bvB
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

    /**
     * Subscribe constructor.
     *
     * @param WeChat $app
     *
     * @throws \Exception
     */
    private function __construct(WeChat $app)
    {
        $this->appid = getenv('WECHAT_APPID');
        $this->access_token = $app->access_token->get();
        $this->scene = $scene;
        $this->template_id = $template_id;
        $this->redirect_url = 'https://wechat.developer.khs1994.com';
        $this->curl = $app['curl'];
    }

    public function confirm(): void
    {
        $data = [
            'appid' => $this->appid,
            'scene' => $this->scene,
            'template_id' => $this->template_id,
            'redirect_url' => $this->redirect_url,
            'reserved' => 'test',
        ];

        $url = self::BASE_URL.http_build_query($data).'#wechat_redirect';

        Response::redirect($url);
    }

    public function callback(): void
    {
        $action = $_GET['action'];
        if ('confirm' === $action) {
            $this->openid = $_GET['openid'];
            $this->template_id = $_GET['template_id'];
            $this->scene = $_GET['scene'];
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
            ],
        ];

        return $this->curl->post($url, $data);
    }
}
