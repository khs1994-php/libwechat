<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

/**
 * 点击菜单跳转链接时的事件推送
 */
abstract class ViewEventHandler extends ClickEventHandler
{
    public $actual_event = 'VIEW';
}
