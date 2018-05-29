<?php

namespace WeChat;

class ShortUrl
{
    const URL = 'https://api.weixin.qq.com/cgi-bin/shorturl?';

    /**
     * @var \Redis
     */
    private static $cache;

    /**
     * 长链接转短链接
     *
     * @param   string $url
     * @param WeChat   $app
     *
     * @return  string
     *
     * @throws \Exception
     * @link    https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1443433600
     */
    public static function get(string $url, WeChat $app)
    {
        self::$cache = $app['cache'];

        $cache = self::cache($url);

        if ($cache) {

            return $cache;
        }

        $request_url = self::URL.$app->access_token->get();
        $request = [
            'action' => 'long2short',
            'long_url' => $url,
        ];
        $json = $app['curl']->post($request_url, json_encode($request));
        $array = json_decode($json, true);
        array_key_exists('short_url', $array) or die(var_dump($array));
        $short_url = $array['short_url'];
        self::cache($url, $short_url);

        return $short_url;
    }

    /**
     * 缓存结果，传入 shortUrl 则缓存数据，否则为取出缓存
     *
     * @param  string      $url
     * @param  string|null $shortUrl
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
