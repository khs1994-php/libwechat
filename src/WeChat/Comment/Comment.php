<?php

namespace WeChat\Comment;

/**
 * 图文消息留言管理
 *
 * Class    CommentController
 * @package App\Http\Controllers\Resource
 *
 * @link    https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1494572718_WzHIY
 */

use WeChat\WeChat;

class Comment
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

    public function __construct(WeChat $app)
    {
        $this->access_token = $app->access_token->get();
    }

    public function add()
    {

    }

    public function download()
    {

    }

    public function modify()
    {

    }

    public function getList()
    {

    }

    public function openComment()
    {

    }

    public function closeComment()
    {

    }

    public function getComment()
    {

    }

    public function markComment()
    {
    }

    public function unmarkComment()
    {

    }

    public function deleteComment()
    {
    }

    public function reployComent()
    {

    }

    public function deleteReployComment()
    {
    }

}
