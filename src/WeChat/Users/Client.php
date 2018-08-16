<?php

declare(strict_types=1);

namespace WeChat\Users;

use WeChat\WeChat;

class Client
{
    const WECHAT_URL = 'https://api.weixin.qq.com/cgi-bin/user/';

    const MARK = self::WECHAT_URL.'info/updateremark?';

    const GET = self::WECHAT_URL.'info?';

    const BATCH = self::WECHAT_URL.'info/batchget?';

    const GET_USER_LIST = self::WECHAT_URL.'get?';

    private $access_token;

    private $curl;

    /**
     * Users constructor.
     *
     * @param WeChat $app
     *
     * @throws \Exception
     */
    public function __construct(WeChat $app)
    {
        $this->curl = $app['curl'];
        $this->access_token = $app->access_token->get();
    }

    /**
     * 设置备注.
     *
     * 该接口暂时开放给微信认证的服务号
     *
     * @param string $openId
     * @param string $mark
     *
     * @return mixed
     *
     * @see   https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1421140838
     */
    public function setNickName(string $openId, string $mark)
    {
        return $this->curl->post(self::MARK.$this->access_token, json_encode([
                'openid' => $openId,
                'remark' => $mark,
            ]
        ));
    }

    /**
     * 获取用户基本信息.
     *
     * @param string $openId
     * @param string $lang
     *
     * @return mixed
     *
     * @see   https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1421140839
     */
    public function getUserInfo(string $openId, string $lang = 'zh_CN')
    {
        return $this->curl->get(self::GET.$this->access_token.'&'.http_build_query([
                    'openid' => $openId,
                    'lang' => $lang,
                ]
            ));
    }

    /**
     * 批量获取用户数据.
     *
     * @param array $openIdList
     *
     * @return mixed
     */
    public function batchGetUserInfo(array $openIdList)
    {
        return $this->curl->post(self::BATCH.$this->access_token, json_encode([
                'user_list' => [
                    $openIdList,
                ],
            ]
        ));
    }

    /**
     * 获取用户列表.
     *
     * @param string|null $nextOpenId
     *
     * @return mixed
     *
     * @see   https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1421140840
     */
    public function getUsersList(string $nextOpenId = null)
    {
        return $this->curl->get(self::GET_USER_LIST.$this->access_token.'&'.http_build_query([
                    'next_openid' => $nextOpenId,
                ]
            ));
    }
}
