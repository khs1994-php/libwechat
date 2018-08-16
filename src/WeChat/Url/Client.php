<?php

declare(strict_types=1);

namespace WeChat\Url;

use WeChat\WeChat;

class Client
{
    const URL = 'https://api.weixin.qq.com/cgi-bin/shorturl?';

    private $app;

    /**
     * @var \Redis
     */
    private static $cache;

    public function __construct(WeChat $app)
    {
        $this->app = $app;
    }

    /**
     * 长链接转短链接.
     *
     * @param string $url
     *
     * @return string
     *
     * @throws \Exception
     *
     * @see    https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1443433600
     */
    public function shorten(string $url)
    {
        self::$cache = $this->app->cache;

        $cache = self::cache($url);

        if ($cache) {
            return $cache;
        }

        $request_url = self::URL.$this->app->access_token->get();
        $request = [
            'action' => 'long2short',
            'long_url' => $url,
        ];
        $json = $this->app['curl']->post($request_url, json_encode($request));
        $array = json_decode($json, true);
        array_key_exists('short_url', $array) or die(var_dump($array));
        $short_url = $array['short_url'];
        self::cache($url, $short_url);

        return $short_url;
    }

    /**
     * 缓存结果，传入 shortUrl 则缓存数据，否则为取出缓存.
     *
     * @param string      $url
     * @param string|null $shortUrl
     *
     * @return int
     */
    private static function cache(string $url, string $shortUrl = null)
    {
        if ($shortUrl) {
            self::$cache->hset('url', $url, $shortUrl);

            return 0;
        } else {
            $cache = self::$cache->hget('url', $url);

            return $cache;
        }
    }
}
