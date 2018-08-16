<?php

declare(strict_types=1);

namespace WeChat\CustomService;

use WeChat\Support\Response;
use WeChat\WeChat;

/**
 * Class CustomService.
 *
 * 客服消息
 *
 * TODO
 */
class Client
{
    const WECHAT_CGI = 'https://api.weixin.qq.com/cgi-bin/customservice/';

    const WECHAT = 'https://api.weixin.qq.com/customservice/kfaccount/';

    const GET_LIST = self::WECHAT_CGI.'getkflist?';

    const GET_ONLINE_LIST = self::WECHAT_CGI.'getonlinekflist?';

    const ADD = self::WECHAT.'add?';

    const INVITE = self::WECHAT.'inviteworker?';

    const UPDATE_INFO = self::WECHAT.'update?';

    const UPLOAD_HEAD = self::WECHAT.'uploadheadimg';

    const DELETE = self::WECHAT.'del?';

    private $access_token;

    private $curl;

    /**
     * CustomService constructor.
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

    public function getList()
    {
        $url = self::GET_LIST.$this->access_token;
        $json = $this->curl->get($url);

        return $this->exec($json);
    }

    public function getOnlineList()
    {
        $url = self::GET_ONLINE_LIST.$this->access_token;
        $json = $this->curl->get($url);

        return $this->exec($json);
    }

    public function add(string $account, string $nickname)
    {
        $url = self::ADD.$this->access_token;
        $data = [
            'kf_account' => $account,
            'nickname' => $nickname,
        ];
        $json = $this->curl->post($url, json_encode($data));

        return $this->exec($json);
    }

    public function invite(string $account, string $wechat)
    {
        $url = self::INVITE.$this->access_token;
        $data = [
            'kf_account' => $account,
            'invite_wx' => $wechat,
        ];
        $json = $this->curl->post($url, json_encode($data));

        return $this->exec($json);
    }

    public function updateInfo(string $account, string $nickname): void
    {
        $url = self::UPDATE_INFO.$this->access_token;
        $data = [
            'kf_account' => $account,
            'nickname' => $nickname,
        ];

        $json = $this->curl->post($url, json_encode($data));
    }

    public function uploadHead(string $account): void
    {
        $url = self::UPLOAD_HEAD.$this->access_token.http_build_query(['kf_account' => $account]);
    }

    public function delete(string $account)
    {
        $url = self::DELETE.$this->access_token.http_build_query(['kf_account' => $account]);
        $json = $this->curl->get($url);

        return $this->exec($json);
    }

    private function exec($json)
    {
        return Response::json($json);
    }
}
