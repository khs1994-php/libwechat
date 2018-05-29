<?php

declare(strict_types=1);

namespace WeChat\Message;

use Redis;

/**
 * Class Text.
 *
 * 文本消息
 *
 * @see    https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1421140453
 */
class Text
{
    private $from_user;

    private $question;

    private $to_user;

    private $time;

    /**
     * @var Redis
     */
    private $cache;

    public function __construct(object $postObj = null, Redis $cache)
    {
        if ($postObj) {
            $this->to_user = $postObj->ToUserName;
            $this->question = $postObj->Content;
            $this->from_user = $postObj->FromUserName;
            $this->time = time();
        }
    }

    public function __invoke()
    {
        $question = $this->question;
        $content = $this->keyWord($question);
        $ai = AI::ai();
        $content = $content ? $content : $ai->chat($question, $this->from_user);
        $key = $this->time.'_'.$this->from_user.'_'.$question;
        $this->cache->hset('wechat_text', $key, $content);

        return Response::text($this->from_user, $this->to_user, $content);
    }

    /**
     * 关键词消息.
     *
     * @param $keyWord
     *
     * @return bool|string
     */
    public function keyWord($keyWord)
    {
        switch ($keyWord) {
            case 1:
                $content = "<a href='https://khs1994.com'>khs1994.com 微信公众号关键词消息1</a>";

                break;
            case 2:
                $content = "<a href='https://khs1994.com'>khs1994.com 微信公众号关键词消息2</a>";

                break;
            case 3:
                $content = "<a href='https://khs1994.com'>khs1994.com 微信公众号关键词消息3</a>";

                break;
            default:
                $content = false;
        }

        return $content;
    }
}
