<?php

declare(strict_types=1);

namespace WeChat\Tests\Server;

use Symfony\Component\HttpFoundation\Request;
use WeChat\Kernel\Messages\Text;
use WeChat\Kernel\Support\Encrypt;
use WeChat\Tests\WechatTestCase;
use WeChat\WeChat;

class ServerTest extends WechatTestCase
{
    /**
     * @var WeChat
     */
    private $wechat;

    public function setUp(): void
    {
        $this->wechat = $this->getInstance();
    }

    /**
     * 首次消息服务器验证
     */
    public function testPushHandlerWitheEchoSting(): void
    {
        $parameters = Encrypt::get('token', null, true, true);

        $this->wechat->request = Request::create('/', 'GET', $parameters);
        $this->wechat->request->overrideGlobals();

        $result = $this->wechat->server->pushHandler()->register();

        $this->assertEquals('echostr', $result);
    }

    public function testPushHandlerText(): void
    {
        $url = Encrypt::get('token', '1');

        // 微信服务器收到的回复（微信公众平台向用户发送消息）
        $expectedTextXml = new Text();
        $expectedTextXml->fromUserName = 'wechat';
        $expectedTextXml->toUserName = 'user';
        $expectedTextXml->content = 'text';

        // 微信服务器发出的消息(用户发给微信公众平台的消息)
        $requestTextXml = new Text();
        $requestTextXml->fromUserName = 'user';
        $requestTextXml->toUserName = 'wechat';
        $requestTextXml->content = 'text';

        $this->wechat->request = Request::create('/'.$url, 'POST', [], [], [], [], $requestTextXml->build());
        $this->wechat->request->overrideGlobals();

        $result = $this->wechat->server->pushHandler(function ($message) {
            return null;
        })
            ->pushHandler(TextHandler::class)
            ->register();

        $this->assertXmlStringEqualsXmlString($expectedTextXml->build(), $result);
    }

    protected function tearDown(): void
    {
        $this->close();
    }
}
