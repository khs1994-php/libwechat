<?php

declare(strict_types=1);

namespace WeChat\Server;

use Closure;
use WeChat\Kernel\Messages\MessageInterface;
use WeChat\Kernel\Messages\Text;
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

    private $message;

    private $echostr;

    private $response;

    private $messageHandlers = [];

    /**
     * @var \WeChat\Kernel\Support\Request
     */
    private $request;

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
        $this->token = $app->token;
        $this->ai = $app->ai;
        $this->request = $app->request;
    }

    public function handle(): void
    {
        $nonce = $this->request->get('nonce', null);
        $timestamp = $this->request->get('timestamp', null);
        $signature = $this->request->get('signature', null);
        $echostr = $this->request->get('echostr', null);
        $openid = $this->request->get('openid', null);

        $array = [$nonce, $timestamp, $this->token];
        sort($array, SORT_STRING);

        if (sha1(implode('', $array)) === $signature) {
            // 首次验证
            if ($echostr) {
                $this->echostr = $echostr;

                return;
            }

            // 网址中包含 openid 说明是消息
            if ($openid) {
                $this->message = XML::handle($this->request->getContent());
            }
        }
    }

    /**
     * @param Closure|string $message
     *
     * @return $this
     */
    public function pushHandler($message = null)
    {
        $this->handle();

        if (\is_callable($message)) {
            $this->response = \call_user_func($message, $this->message);
        }

        if (\is_string($message) and class_exists($message)) {
            $this->messageHandlers[] = $message;
        }

        return $this;
    }

    public function register()
    {
        if ($this->echostr) {
            return $this->echostr;
        }

        if ($this->response) {
            return $this->response;
        }

        foreach ($this->messageHandlers as $message) {
            if ($result = (new $message($this->message))->handle()) {
                break;
            }
        }

        // 处理逻辑返回均为空，调用 AIChat
        $result = $result ?? $this->aiChat();

        // 返回字符串 success 或 空串
        if ('success' === $result or '' === $result) {
            return $result;
        }

        if ($result instanceof MessageInterface) {
            return $result->build();
        }

        return 'failure';
    }

    /**
     * @return string|Text
     */
    public function aiChat()
    {
        $message = $this->message;

        if ('text' !== (string) $message->MsgType) {
            return 'success';
        }

        $fromUserName = $message->FromUserName;
        $toUserName = $message->ToUserName;
        $content = $message->Content;

        $response_content = $this->ai->chat((string) $content, (string) $fromUserName);

        $text = new Text();
        $text->fromUserName = $toUserName;
        $text->toUserName = $fromUserName;
        $text->content = $response_content;

        return $text;
    }
}
