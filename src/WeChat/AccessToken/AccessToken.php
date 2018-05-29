<?php

namespace WeChat\AccessToken;

use WeChat\WeChat;

class AccessToken
{
    const BASE_URL = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&';

    private $curl;

    private $cache;

    private $app_id;

    private $app_secret;

    public function __construct(WeChat $app)
    {
        $this->curl = $app['curl'];
        $this->cache = $app['cache'];
        $this->app_id = $app['APP_ID'];
        $this->app_secret = $app['APP_SECRET'];
    }

    public function get(bool $http_build_query = true)
    {
        $access_token = $this->cache->hget('wechat_access_token', 'access_token');

        if ($http_build_query) {

            return http_build_query(['access_token' => $access_token]);
        }

        return $access_token;
    }

    /**
     * 获取 access_token
     *
     * @param  bool $force
     *
     * @return array
     *
     * @throws \Exception
     * @see   https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1421140183
     */
    public function server(bool $force = false)
    {
        // 过期时间

        $expire_time = $this->getExpireTime();

        if ($expire_time < time() || $force === true) {

            // access_token 的有效期目前为2小时，需定时刷新，重复获取将导致上次获取的 access_token 失效
            // 过期或强制刷新
            $access_token = $this->getForce();
            $expire_time = $this->getExpireTime();
            $code = 200;
        } else {
            // 未过期
            $access_token = $this->cache();
            $code = 304;
        }

        $array = ['code' => $code,
            'message' => [
                'access_token' => $access_token,
                'force' => $force,
                'expire_time' => $expire_time,
                '时间' => date('Y-m-d H:i:s', $expire_time),
            ],
        ];

        return $array;
    }

    /**
     * 获取 access_token 主函数
     *
     * @return mixed
     * @throws \Exception
     */
    private function getForce()
    {
        $url = self::BASE_URL.http_build_query([
                'appid' => $this->app_id,
                'secret' => $this->app_secret
            ]);

        $response = json_decode($this->curl->get($url), true);
        if (array_key_exists('errcode', $response)) {
            $expire_time = 60;
            $access_token = $response['errmsg'];
        } else {
            $access_token = $response['access_token'];
            $expire_time = time() + 7140;
        }

        $this->cache($access_token, $expire_time);

        return $access_token;
    }

    /**
     * 从缓存中获取或设置 access_token
     *
     * @param  string|null $access_token
     * @param  int|null    $time
     *
     * @return int
     */
    private function cache(string $access_token = null, int $time = null)
    {
        if ($time && $access_token) {
            $this->cache->hSet('wechat_access_token', 'access_token', $access_token);
            $this->cache->hSet('wechat_access_token', 'expire_time', $time);

            return 0;
        } else {

            return $this->cache->hget('wechat_access_token', 'access_token');
        }
    }

    /**
     * 获取过期时间
     *
     * @return mixed
     */
    private function getExpireTime()
    {
        return $this->cache->hget('wechat_access_token', 'expire_time');
    }
}
