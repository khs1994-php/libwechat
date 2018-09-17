<?php

declare(strict_types=1);

namespace WeChat\Tests\Server;

use WeChat\Kernel\Messages\Text;

class TextHandler extends \WeChat\Kernel\Messages\Handler\TextHandler
{
    public function handle()
    {
        $text = new Text();
        $text->toUserName = $this->toUserName;
        $text->fromUserName = $this->fromUserName;
        $text->content = 'text';

        return $text;
    }
}
