<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages;

class Image extends Base
{
    protected $msgType = 'image';

    public $mediaId;

    public function build()
    {
        $toUserName = $this->toUserName;

        $fromUserName = $this->fromUserName;

        $createTime = $this->createTime ?? time();

        $mediaId = $this->mediaId;

        return <<<EOF
<xml>
<ToUserName>< ![CDATA[$toUserName]]></ToUserName>
<FromUserName>< ![CDATA[$fromUserName]]></FromUserName>
<CreateTime>$createTime</CreateTime>
<MsgType>< ![CDATA[voice]]></MsgType>
<Voice>
<MediaId>< ![CDATA[$mediaId]]></MediaId>
</Voice>
</xml>
EOF;
    }
}
