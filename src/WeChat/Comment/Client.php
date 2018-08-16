<?php

declare(strict_types=1);

namespace WeChat\Comment;

/*
 * 图文消息留言管理
 *
 * Class    CommentController
 * @package App\Http\Controllers\Resource
 *
 * @link    https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1494572718_WzHIY
 */

use WeChat\WeChat;

class Client
{
    const WECHAT = 'https://api.weixin.qq.com/cgi-bin/material/';

    const ADD = self::WECHAT.'add_news?';

    const DOWNLOAD = self::WECHAT.'get_material?';

    const MODIFY = self::WECHAT.'update_news?';

    const GET_LIST = self::WECHAT.'batchget_material?';

    const OPEN = self::WECHAT.'open?';

    const CLOSE = self::WECHAT.'close?';

    const GET = self::WECHAT.'list?';

    private $access_token;

    /**
     * Comment constructor.
     *
     * @param WeChat $app
     *
     * @throws \Exception
     */
    public function __construct(WeChat $app)
    {
        $this->access_token = $app->access_token->get();
    }

    public function add(): void
    {
    }

    public function download(): void
    {
    }

    public function modify(): void
    {
    }

    public function getList(): void
    {
    }

    public function openComment(): void
    {
    }

    public function closeComment(): void
    {
    }

    public function getComment(): void
    {
    }

    public function markComment(): void
    {
    }

    public function unmarkComment(): void
    {
    }

    public function deleteComment(): void
    {
    }

    public function reployComent(): void
    {
    }

    public function deleteReployComment(): void
    {
    }
}
