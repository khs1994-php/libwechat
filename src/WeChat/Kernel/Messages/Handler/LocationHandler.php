<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

class LocationHandler extends Handler
{
    /**
     * @var 纬度
     */
    public $location_x;

    /**
     * @var 经度
     */
    public $location_y;

    public $scale;

    public $label;

    public function __construct($message)
    {
        parent::__construct($message);

        $this->location_x = $message->Location_X;
        $this->location_y = $message->Location_Y;
        $this->scale = $message->Scale;
        $this->label = $message->Lable;
    }
}
