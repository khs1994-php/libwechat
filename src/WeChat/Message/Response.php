<?php

namespace WeChat\Message;


/**
 * Class Response
 *
 * 被动回复用户消息
 *
 * @package App\Http\Controllers\SDK\Message
 *
 * @link    https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1421140543
 */
class Response
{
    /**
     * 文本消息
     *
     * @param  string $to_user
     * @param  string $from_user
     * @param  string $content
     * @return string
     */
    public static function text(string $to_user, string $from_user, string $content)
    {
        $template = '<xml>
<ToUserName><![CDATA[%s]]></ToUserName>
<FromUserName><![CDATA[%s]]></FromUserName>
<CreateTime>%s</CreateTime>
<MsgType><![CDATA[%s]]></MsgType>
<Content><![CDATA[%s]]></Content>
</xml>';

        return sprintf($template, $to_user, $from_user, time(), 'text', $content);
    }

    /**
     * 图片消息
     * @param string $to_user
     * @param string $from_user
     * @param string $media_id
     * @return string
     */
    public static function image(string $to_user, string $from_user, string $media_id)
    {
        $template = '<xml>
<ToUserName><![CDATA[%s]]></ToUserName>
<FromUserName><![CDATA[%s]]></FromUserName>
<CreateTime>%s</CreateTime>
<MsgType><![CDATA[%s]]></MsgType>
<Image><MediaId><![CDATA[%s]]></MediaId></Image>
</xml>';

        return sprintf($template, $to_user, $from_user, time(), 'image', $media_id);
    }

    /**
     * 语音消息
     * @param string $to_user
     * @param string $from_user
     * @param string $media_id
     * @return string
     */
    public static function voice(string $to_user, string $from_user, string $media_id)
    {
        $template = '<xml>
<ToUserName><![CDATA[%s]]></ToUserName>
<FromUserName><![CDATA[%s]]></FromUserName>
<CreateTime>%s</CreateTime>
<MsgType><![CDATA[%s]]></MsgType>
<Voice><MediaId><![CDATA[%s]]></MediaId></Voice>
</xml>';

        return sprintf($template, $to_user, $from_user, time(), 'image', $media_id);
    }

    /**
     * 视频消息
     * @param $to_user
     * @param $from_user
     * @param $media_id
     * @param $title
     * @param $description
     * @return string
     */
    public static function video($to_user, $from_user, $media_id, $title, $description)
    {
        $template = '<xml>
<ToUserName><![CDATA[%s]]></ToUserName>
<FromUserName><![CDATA[%s]]></FromUserName>
<CreateTime>%s</CreateTime>
<MsgType><![CDATA[video]]></MsgType>
<Video>
<MediaId><![CDATA[%s]]></MediaId>
<Title><![CDATA[%s]]></Title>
<Description>< ![CDATA[%s]]></Description>
</Video>
</xml>';

        return sprintf($template, $to_user, $from_user, time(), $media_id, $title, $description);
    }

    /**
     * 音乐消息
     * @param string $to_user
     * @param string $from_user
     * @param string $title
     * @param string $description
     * @param string $music_url
     * @param string $hq_music_url
     * @param string $media_id
     * @return string
     */
    public static function music(string $to_user,
                                 string $from_user,
                                 string $title,
                                 string $description,
                                 string $music_url,
                                 string $hq_music_url,
                                 string $media_id
    )
    {
        $template = '<xml>
<ToUserName><![CDATA[%s]]></ToUserName>
<FromUserName><![CDATA[%s]]></FromUserName>
<CreateTime>%s</CreateTime>
<MsgType><![CDATA[music]]></MsgType>
<Music>
<Title><![CDATA[%s]]></Title>
<Description><![CDATA[%s]]></Description>
<MusicUrl><![CDATA[%s]]></MusicUrl>
<HQMusicUrl><![CDATA[%s]]></HQMusicUrl>
<ThumbMediaId><![CDATA[%s]]></ThumbMediaId>
</Music>
</xml>';

        return sprintf($template, $to_user, $from_user, time(), $title, $description, $music_url, $hq_music_url, $media_id);

    }

    /**
     * 图文消息
     * @param string $to_user
     * @param string $from_user
     * @param int    $count
     * @param string $title
     * @param string $description
     * @param string $pic_url
     * @param string $url
     * @param string $title2
     * @param string $description2
     * @param string $pic_url2
     * @param string $url2
     * @return string
     */
    public static function picUrl(string $to_user,
                                  string $from_user,
                                  int $count,
                                  string $title,
                                  string $description,
                                  string $pic_url,
                                  string $url,
                                  string $title2,
                                  string $description2,
                                  string $pic_url2,
                                  string $url2)
    {
        // 图文消息总数最多为8条
        $template = '<xml>
<ToUserName><![CDATA[%s]]></ToUserName>
<FromUserName><![CDATA[%s]]></FromUserName>
<CreateTime>%s</CreateTime>
<MsgType><![CDATA[news]]></MsgType>
<ArticleCount>%s</ArticleCount>
<Articles>
<item>
<Title><![CDATA[%s]]></Title>
<Description><![CDATA[%s]]></Description>
<PicUrl><![CDATA[%s]]></PicUrl>
<Url><![CDATA[%s]]></Url>
</item>
<item>
<Title><![CDATA[%s]]></Title>
<Description><![CDATA[%s]]></Description>
<PicUrl><![CDATA[%s]]></PicUrl>
<Url><![CDATA[%s]]></Url>
</item>
</Articles>
</xml>';

        return sprintf($template,
            $to_user,
            $from_user,
            time(),
            $count,
            $title,
            $description,
            $pic_url,
            $url,
            $title2,
            $description2,
            $pic_url2,
            $url2);
    }
}
