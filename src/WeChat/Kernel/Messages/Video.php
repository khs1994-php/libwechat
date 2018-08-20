<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages;

class Video extends Base
{
    protected $msgType = 'video';

    public $mediaId;

    public $title;

    public $description;

    public function build()
    {
        $toUserName = $this->toUserName;
        $fromUserName = $this->fromUserName;
        $createTime = $this->createTime ?? time();
        $mediaId = $this->mediaId;
        $title = $this->title;
        $description = $this->description;

        return <<<EOF
<xml>
<ToUserName>< ![CDATA[$toUserName]]></ToUserName>
<FromUserName>< ![CDATA[$fromUserName]]></FromUserName>
<CreateTime>$createTime</CreateTime>
<MsgType>< ![CDATA[video]]></MsgType>
<Video>
<MediaId>< ![CDATA[$mediaId]]></MediaId>
<Title>< ![CDATA[$title]]></Title>
<Description>< ![CDATA[$description]]></Description>
</Video>
</xml>
EOF;
    }
}
