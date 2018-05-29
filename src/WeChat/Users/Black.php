<?php

namespace WeChat\Users;

use WeChat\WeChat;


/**
 * Class Black
 *
 * 黑名单管理
 *
 * @link https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1471422259_pJMWA
 */
class Black
{
    const WECHAT_URL = 'https://api.weixin.qq.com/cgi-bin/tags/members/';

    const GET = self::WECHAT_URL.'getblacklist?';

    const ADD = self::WECHAT_URL.'batchblacklist?';

    const DELETE = self::WECHAT_URL.'batchunblacklist?';

    private $access_token;

    private $curl;

    public function __construct(WeChat $app)
    {
        $this->access_token = $app->access_token->get();
        $this->curl = $app['curl'];
    }

    /**
     * 获取黑名单列表
     *
     * @param  string|null $beginOpenId
     *
     * @return mixed
     */
    public function get(string $beginOpenId = null)
    {
        return $this->curl->post(self::GET.$this->access_token, json_encode([
                'begin_openid' => $beginOpenId
            ]
        ));
    }

    /**
     * 拉黑用户
     *
     * @param array $openIdList
     *
     * @return mixed
     */
    public function add(array $openIdList)
    {
        return $this->curl->post(self::ADD.$this->access_token, json_encode([
                'openid_list' => $openIdList
            ]
        ));
    }

    /**
     * 取消拉黑用户
     *
     * @param array $openIdList
     *
     * @return mixed
     */
    public function delete(array $openIdList)
    {
        return $this->curl->post(self::ADD.$this->access_token, json_encode([
                'openid_list' => $openIdList
            ]
        ));
    }
}
