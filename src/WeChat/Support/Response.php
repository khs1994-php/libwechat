<?php

namespace WeChat\Support;

class Response
{
    public static function json($array_or_json)
    {
        header('Content-Type: Application/json');

        if (!is_array($array_or_json)) {

            return $array_or_json;
        }

        return json_encode($array_or_json);
    }

    public static function redirect(string $url)
    {

    }
}
