<?php

declare(strict_types=1);

namespace WeChat\Message;

use TencentAI\Error\TencentAIError;
use TencentAI\TencentAI;

class AI
{
    private $ai;

    private static $tencentAI;

    private function __construct()
    {
        $app_id = getenv('TENCENT_AI_APPID');
        $app_key = getenv('TENCENT_AI_APPKEY');

        $this->ai = TencentAI::tencentAI($app_id, $app_key);
    }

    public static function ai()
    {
        if (!(self::$tencentAI instanceof self)) {
            self::$tencentAI = new self();
        }

        return self::$tencentAI;
    }

    // 闲聊

    public function chat($question, $session)
    {
        try {
            $content = $this->ai->nlp()->chat($question, $session);
        } catch (TencentAIError $e) {
            return '小妲己被你玩坏了';
        }

        return $content = $content['data']['answer'];
    }

    // 语音识别

    public function voice($voice)
    {
        try {
            $array = $this->ai->audio()->asr($voice, 3, 8000);
        } catch (TencentAIError $e) {
            return '语音识别错误';
        }
        $data = $array['data']['text'];
        if ($data) {
            return $data;
        } else {
            return '识别内容为空';
        }
    }
}
