<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages;

class News extends Base
{
    protected $msgType = 'news';

    protected $news;

    public function createNews($articles, $title, $description, $picUrl, $url): void
    {
        $this->news[] = compact('articles', 'title', 'description', 'picUrl', 'url');
    }

    public function build()
    {
        $toUserName = $this->toUserName;
        $fromUserName = $this->fromUserName;
        $articleCount = count($this->news);
        $ceateTime = $this->createTime ?? time();
        $content = <<<EOF
<xml>
<ToUserName><![CDATA[$toUserName]]></ToUserName>
<FromUserName><![CDATA[$fromUserName]]></FromUserName>
<CreateTime>$createTime</CreateTime>
<MsgType><![CDATA[news]]></MsgType>
<ArticleCount>$articleCount</ArticleCount>
<Articles>
EOF;

        foreach ($this->news as $k) {
            $title = $k['title'];
            $description = $k['description'];
            $picUrl = $k['picUrl'];
            $url = $k['url'];

            $content .= '<item>';
            $content .= "<Title><![CDATA[$title]]></Title>";
            $content .= "<Description><![CDATA[$description]]></Description>";
            $content .= "<PicUrl><![CDATA[$picUrl]]></PicUrl>";
            $content .= "<Url><![CDATA[$url]]></Url>\n</item>";
        }

        return $content .= "</Articles>\n</xml>";
    }
}
