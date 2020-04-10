<?php

declare(strict_types=1);

namespace WeChat\Material;

use WeChat\Support\Response;
use WeChat\WeChat;

/**
 * Class Material.
 *
 * 永久素材
 */
class Client
{
    const WECHAT = 'https://api.weixin.qq.com/cgi-bin/material/';

    const ADD_NEWS = self::WECHAT.'add_news?';

    const ADD_IMAGE = 'https://api.weixin.qq.com/cgi-bin/media/uploadimg?';

    const ADD = self::WECHAT.'add_material?';

    const DOWNLOAD = self::WECHAT.'get_material?';

    const DELETE = self::WECHAT.'del_material?';

    const COUNT = self::WECHAT.'get_materialcount?';

    const LIST = self::WECHAT.'batchget_material?';

    private $access_token;

    private $curl;

    /**
     * Material constructor.
     *
     * @throws \Exception
     */
    public function __construct(WeChat $app)
    {
        $this->access_token = $app->access_token->get();
        $this->curl = $app['curl'];
    }

    /**
     * 新增永久图文素材.
     *
     * @param string      $thumb_media_id     封面图
     * @param string      $content            图文消息的具体内容，支持HTML标签，必须少于2万字符，小于1M，且此处会去除JS ,涉及图片url必须来源
     *                                        "上传图文消息内的图片获取URL"接口获取。外部图片url将被过滤。
     * @param string      $content_source_url 原文链接
     * @param string|null $digest             摘要
     * @param bool        $show_cover_pic     是否显示封面图
     *
     * @return mixed
     *
     * @see   https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1444738729
     */
    public function addNews(string $title,
                            string $thumb_media_id,
                            string $content,
                            string $content_source_url,
                            string $author = null,
                            string $digest = null,
                            bool $show_cover_pic = true)
    {
        $url = self::ADD_NEWS.$this->access_token;

        return Response::json($this->curl->post($url, json_encode([
            [
                'articles' => [
                    'title' => $title,
                    'thumb_media_id' => $thumb_media_id,
                    'author' => $author,
                    'digest' => $digest,
                    'show_cover_pic' => $show_cover_pic,
                    'content' => $content,
                    'content_source_url' => $content_source_url,
                ],
                // 若为多图文，再跟上多个 articles,暂时只测试单图文
            ],
        ])));
    }

    /**
     * 上传图文消息内的图片获取URL.
     *
     * @return mixed json
     *
     * @example
     * <pre>
     * {"url":"http://mmbiz.qpic.cn/mmbiz/xxx"}
     * <pre>
     */
    public function addImage(string $image)
    {
        $url = self::ADD_IMAGE.$this->access_token;
        $this->curl->setOpt(CURLOPT_SAFE_UPLOAD, true);

        return Response::json($this->curl->post($url, [
            'media' => new \CURLFile($image),
        ]));
    }

    /**
     * 新增其他类型永久素材.
     *
     * @param string      $type              图片（image）、语音（voice）、视频（video）和缩略图（thumb）
     * @param string|null $videoTitle        仅视频素材需要此字段
     * @param string|null $videoIntroduction 仅视频素材需要此字段
     *
     * @return mixed
     */
    public function add(string $file, string $type, string $videoTitle = null, string $videoIntroduction = null)
    {
        $url = self::ADD.$this->access_token.'?'.http_build_query([
                    'type' => $type,
                ]
            );
        $this->curl->setOpt(CURLOPT_SAFE_UPLOAD, true);

        $data = [
            'media' => new \CURLFile($file),
        ];

        if ('video' === $type) {
            $description = [
                'description' => json_encode([
                    'title' => $videoTitle,
                    'introduction' => $videoIntroduction,
                ]),
            ];
            $data = array_merge($data, $description);
        }

        return Response::json($this->curl->post($url, $data));
    }

    /**
     * 获取永久素材.
     *
     * @param  $mediaId
     *
     * @return mixed
     *
     * @see   https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1444738730
     */
    public function download($mediaId)
    {
        $response = $this->curl->post(self::DOWNLOAD.$this->access_token, json_encode([
                    'media_id' => $mediaId,
                ]
            )
        );
        $is_json = json_decode($response);
        if ($is_json) {
            return Response::json($is_json);
        } else {
            return $response;
        }
    }

    /**
     * 删除永久素材.
     *
     * @param  $mediaId
     *
     * @return mixed
     *
     * @see   https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1444738731
     */
    public function delete($mediaId)
    {
        return Response::json($this->curl->post(self::DELETE.$this->access_token, json_encode([
                    'media_id' => $mediaId,
                ]
            )
        )
        );
    }

    public function modify(): void
    {
    }

    /** 获取素材总数
     *
     * @return mixed
     *
     * @see   https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1444738733
     */
    public function count()
    {
        return Response::json($this->curl->get(self::COUNT.$this->access_token));
    }

    /**
     * 获取素材列表.
     *
     * @param string $type   图片（image）、视频（video）、语音 （voice）、图文（news）
     * @param int    $offset 从全部素材的该偏移位置开始返回，0表示从第一个素材 返回
     * @param int    $count  返回素材的数量，取值在1到20之间
     *
     * @return mixed
     *
     * @see   https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1444738734
     */
    public function list(string $type, int $offset = 0, int $count = 20)
    {
        return Response::json($this->curl->post(self::LIST.$this->access_token, json_encode([
                    'type' => $type,
                    'offset' => $offset,
                    'count' => $count,
                ]
            )
        )
        );
    }
}
