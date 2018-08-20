<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler\Event;

use WeChat\Kernel\Messages\Handler\BaseHandler;

/**
 * 自定义菜单事件.
 *
 * 用户点击自定义菜单后，微信会把点击事件推送给开发者，请注意，点击菜单弹出子菜单，不会产生上报。
 */
class ClickHandler extends BaseHandler
{
    /**
     * @var string CLICK 点击菜单拉取消息时的事件推送
     */
    public $event;

    /**
     * @var string 事件KEY值，与自定义菜单接口中KEY值对应
     */
    public $eventKey;

    public function __construct($message)
    {
        parent::__construct($message);

        $this->event = $message->Event;
        $this->eventKey = $message->EventKey;
    }
}
