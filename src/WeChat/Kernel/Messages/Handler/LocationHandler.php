<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

abstract class LocationHandler extends Handler
{
    public $actual_msgType = 'location';

    /**
     * @var string 纬度
     */
    public $location_x;

    /**
     * @var string 经度
     */
    public $location_y;

    /**
     * @var string 地图缩放大小
     */
    public $scale;

    /**
     * @var string 地理位置信息
     */
    public $label;

    public function __construct($message)
    {
        parent::__construct($message);

        $this->location_x = (string) $message->Location_X;
        $this->location_y = (string) $message->Location_Y;
        $this->scale = (string) $message->Scale;
        $this->label = (string) $message->Lable;
    }
}
