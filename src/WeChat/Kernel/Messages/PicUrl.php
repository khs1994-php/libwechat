<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages;

class PicUrl extends Message
{
    public $count;

    public $title = [];

    public $description = [];

    public $pic_url = [];

    public $url = [];

    public function build()
    {
        $item = '';

        $fromUserName = $this->fromUserName;
        $toUserName = $this->toUserName;
        $count = $this->count;
        $title = $this->title;
        $description = $this->description;
        $pic_url = $this->pic_url;
        $url = $this->url;

        $header = '<xml>
<ToUserName><![CDATA[%s]]></ToUserName>
<FromUserName><![CDATA[%s]]></FromUserName>
<CreateTime>%s</CreateTime>
<MsgType><![CDATA[news]]></MsgType>
<ArticleCount>%s</ArticleCount>
<Articles>
';
        $header = printf($header, $toUserName, $fromUserName, time(), $count);

        $footer = '</Articles></xml>';

        for ($i = 0; $i < $this->count; ++$i) {
            $item_single = '
        <item>
<Title><![CDATA[%s]]></Title>
<Description><![CDATA[%s]]></Description>
<PicUrl><![CDATA[%s]]></PicUrl>
<Url><![CDATA[%s]]></Url>
</item>
        ';

            $item_single = sprintf($item_single, $title[$i], $description[$i], $pic_url[$i], $url[$i]);

            $item .= $item_single;
        }

        return $header.$item.$footer;
    }
}
