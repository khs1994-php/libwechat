<?php

declare(strict_types=1);

namespace WeChat\Kernel\Messages\Handler;

/**
 * 用户同意上报地理位置后，每次进入公众号会话时，都会在进入时上报地理位置，或在进入会话后每 5 秒上报一次地理位置，.
 */
abstract class LocationEventHandler extends Handler
{
    /**
     * @var string 事件类型，LOCATION 上报地理位置事件
     */
    public $event;

    public $actual_event = 'LOCATION';

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

        $this->event = (string) $message->Event;
        $this->latitude = (string) $message->Latitude;
        $this->longitude = (string) $message->Longitude;
        $this->precision = (string) $message->Precision;
    }
}
