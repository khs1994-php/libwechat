<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages;

class Text extends Base
{
    protected $msgType = 'text';

    public $content;

    public function handle()
    {
        $toUserName = $this->toUserName;
        $fromUserName = $this->fromUserName;
        $createTime = $this->createTime ?? time();
        $content = $this->content;

        return <<<EFO
<xml>
<ToUserName><![CDATA[$toUserName]]></ToUserName>
<FromUserName><![CDATA[$fromUserName]]></FromUserName> 
<CreateTime>$createTime</CreateTime>
<MsgType><![CDATA[text]]></MsgType>
<Content><![CDATA[$content]]></Content>
</xml>
EFO;
    }
}