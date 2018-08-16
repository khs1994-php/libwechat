<?php

declare(strict_types=1);

namespace WeChat\AccessToken;

use Exception;
use Redis;
use WeChat\WeChat;

class AccessToken
{
    const BASE_URL = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&';

    private $curl;

    /**
     * @var Redis
     */
    private $cache;

    private $app_id;

    private $app_secret;

    public function __construct(WeChat $app)
    {
        $this->curl = $app->curl;
        $this->cache = $app->cache;
        $this->app_id = $app->APP_ID;
        $this->app_secret = $app->APP_SECRET;
    }

    /**
     * @param bool $http_build_query
     *
     * @return array|string
     *
     * @throws Exception
     */
    public function get(bool $http_build_query = true)
    {
        $access_token = ($this->server())['access_token'];

        if ($http_build_query) {
            return http_build_query(['access_token' => $access_token]);
        }

        return $access_token;
    }

    /**
     * 获取 access_token.
     *
     * @param bool $force
     *
     * @return array
     *
     * @throws \Exception
     *
     * @see   https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1421140183
     */
    public function server(bool $force = false)
    {
        // 过期时间

        $access_token = $this->cache->get('wechat_access_token_'.$this->app_id);

        if (!$access_token || true === $force) {
            // access_token 的有效期目前为2小时，需定时刷新，重复获取将导致上次获取的 access_token 失效
            // 过期或强制刷新
            $access_token = $this->getForce();
            $expire_time = $this->getExpireTime();
            $code = 200;
        } else {
            // 未过期
            $access_token = $this->cache();
            $expire_time = $this->getExpireTime();
            $code = 304;
        }

        $array = [
            'code' => $code,
            'access_token' => $access_token,
            'force' => $force,
            'expire_time' => $expire_time,
            '时间' => date('Y-m-d H:i:s', $expire_time),
        ];

        return $array;
    }

    /**
     * 获取 access_token 主函数.
     *
     * @return mixed
     *
     * @throws \Exception
     */
    private function getForce()
    {
        $url = self::BASE_URL.http_build_query([
                'appid' => $this->app_id,
                'secret' => $this->app_secret,
            ]);

        $response = json_decode($this->curl->get($url), true);

        if (array_key_exists('errcode', $response)) {
            throw new Exception($response['errmsg'], 500);
        } else {
            $access_token = $response['access_token'];
        }

        // 缓存结果
        $this->cache($access_token);

        return $access_token;
    }

    /**
     * 从缓存中获取或设置 access_token.
     *
     * @param string|null $access_token
     *
     * @return int
     */
    private function cache(string $access_token = null)
    {
        if ($access_token) {
            $this->cache->set('wechat_access_token_'.$this->app_id, $access_token, 7140);

            return 0;
        } else {
            return $this->cache->get('wechat_access_token_'.$this->app_id);
        }
    }

    /**
     * 获取过期时间.
     *
     * @return mixed
     */
    private function getExpireTime()
    {
        return $this->cache->ttl('wechat_access_token_'.$this->app_id);
    }
}
