<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages;

class Voice extends Base
{
    protected $msgType = 'voice';

    public $mediaId;

    public function build()
    {
        $toUserName = $this->toUserName;
        $fromUserName = $this->fromUserName;
        $createTime = $this->createTime ?? time();
        $mediald = $this->mediaId;

        return <<<EOF
<xml>
<ToUserName><![CDATA[$toUserName]]></ToUserName>
<FromUserName><![CDATA[$fromUserName]]></FromUserName>
<CreateTime>$createTime</CreateTime>
<MsgType><![CDATA[voice]]></MsgType>
<Voice>
<MediaId><![CDATA[$mediald]]></MediaId>
</Voice>
</xml>
EOF;
    }
}
