<?php

namespace WeChat;

/**
 *
 * 生成加密 url 以供后续测试
 *
 * @package App\Http\Controllers\SDK
 */
class Encrypt
{
    public static function get(string $token, string $openID = null)
    {
        $nonce = 'test';
        $timestamp = time();

        $array = [$nonce, $timestamp, $token];
        sort($array, SORT_STRING);
        $signature = sha1(implode($array));
        $data = [
            'signature' => $signature,
            'timestamp' => $timestamp,
            'nonce' => $nonce,
            'openid' => $openID,
        ];

        return '?'.http_build_query($data);
    }
}
