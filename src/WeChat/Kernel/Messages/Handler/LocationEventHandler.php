<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

class LocationEventHandler extends Handler
{
    /**
     * @var string 事件类型，LOCATION 上报地理位置事件
     */
    public $event;

    /**
     * @var float 纬度
     */
    public $latitude;

    /**
     * @var float 经度
     */
    public $longitude;

    /**
     * @var float 精度
     */
    public $precision;

    public function __construct($message)
    {
        parent::__construct($message);

        $this->event = $message->Event;
        $this->latitude = $message->Latitude;
        $this->longitude = $message->Longitude;
        $this->precision = $message->Precision;
    }
}
