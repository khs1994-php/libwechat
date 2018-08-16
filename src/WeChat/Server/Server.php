<?php

declare(strict_types=1);

namespace WeChat\Server;

use Closure;
use WeChat\Kernel\Support\XML;
use WeChat\WeChat;

/**
 * Class Message.
 *
 * 接收微信服务器 post 过来的数据
 */
class Server
{
    const GET_AUTO_REPLY_RULE = 'https://api.weixin.qq.com/cgi-bin/get_current_autoreply_info?';

    private $cache;

    private $token;

    /**
     * @var WeChat
     */
    private $app;

    private $message;

    private $echostr;

    private $response;

    /**
     * Client constructor.
     *
     * @param WeChat $app
     *
     * @throws \Exception
     */
    public function __construct(WeChat $app)
    {
        $this->cache = $app->cache;
        $this->token = $app->TOKEN;
        $this->app = $app;
    }

    public function handle()
    {
        $nonce = $_GET['nonce'] ?? null;
        $timestamp = $_GET['timestamp'] ?? null;
        $signature = $_GET['signature'] ?? null;
        $echostr = $_GET['echostr'] ?? null;
        $openid = $_GET['openid'] ?? null;

        $array = [$nonce, $timestamp, $this->token];
        sort($array, SORT_STRING);

        if (sha1(implode($array)) === $signature) {
            // 首次验证
            if ($echostr) {
                $this->echostr = $echostr;

                return;
            }

            // 网址中包含 openid 说明是消息

            if ($openid) {
                $this->message = XML::handle(file_get_contents('php://input'));

                return $this->message;
            }
        }
    }

    public function push(Closure $message)
    {
        if ($this->echostr) {
            return $this;
        }

        if (is_callable($message)) {
            $this->response = call_user_func($message, $this->handle());
        }
    }

    public function serve()
    {
        if ($this->echostr) {
            return $this->echostr;
        }

        return $this->response;
    }
}
