<?php

declare(strict_types=1);

namespace WeChat\AI;

use TencentAI\Error\TencentAIError;
use TencentAI\TencentAI;
use WeChat\WeChat;

class Client
{
    public function __construct(WeChat $app)
    {
        $app_id = $app->tencent_ai_appid;
        $app_key = $app->tencent_ai_appkey;

        $this->ai = TencentAI::getInstance((int) $app_id, $app_key);
    }

    /*
     * 闲聊
     */
    public function chat($question, $session)
    {
        try {
            $content = $this->ai->nlp()->chat($question, $session);
        } catch (TencentAIError $e) {
            return '小妲己被你玩坏了';
        }

        return $content = $content['data']['answer'];
    }

    /**
     * 语音识别.
     */
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
