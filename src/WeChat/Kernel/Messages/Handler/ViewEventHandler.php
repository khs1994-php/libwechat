<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

class ViewEventHandler extends ClickEventHandler
{
    /**
     * @var string VIEW 点击菜单跳转链接时的事件推送
     */
    public $event;

    /**
     * @var string 事件KEY值，设置的跳转URL
     */
    public $eventKey;
}
