<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages;

class Music extends Base
{
    protected $msgType = 'music';

    public $title;

    public $description;

    public $musicUrl;

    public $HQMusicUrl;

    public $thumbMediaId;

    public function handle()
    {
        $toUserName = $this->toUserName;
        $fromUserName = $this->fromUserName;
        $createTime - $this->createTime ?? time();
        $title = $this->title;
        $description = $this->description;
        $musicUrl = $this->musicUrl;
        $HQMusicUrl = $this->HQMusicUrl;
        $thumbMediaId = $this->thumbMediaId;

        return <<<EOF
<xml>
<ToUserName><![CDATA[$toUserName]]></ToUserName>
<FromUserName><![CDATA[$fromUserName]]></FromUserName>
<CreateTime>$createTime</CreateTime>
<MsgType><![CDATA[music]]></MsgType>
<Music>
<Title><![CDATA[$title]]></Title>
<Description><![CDATA[$description]]></Description>
<MusicUrl><![CDATA[$musicUrl]]></MusicUrl>
<HQMusicUrl><![CDATA[$HQMusicUrl]]></HQMusicUrl>
<ThumbMediaId><![CDATA[$meumbMediaId]]></ThumbMediaId>
</Music>
</xml>
EOF;
    }
}
