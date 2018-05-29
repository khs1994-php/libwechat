<?php

declare(strict_types=1);

namespace WeChat\Message;

/**
 * 事件消息.
 */
class Event
{
    private $postXMLObj;

    private $to_user;

    private $from_user;

    private $create_time;

    private $message_id;

    private $time;

    public function __construct(object $postXMLObj)
    {
        $this->postXMLObj = $postXMLObj;

        $this->to_user = $postXMLObj->ToUserName;
        $this->from_user = $postXMLObj->FromUserName;
        $this->create_time = $postXMLObj->CreateTime;
        $this->message_id = $postXMLObj->MsgId;
        $this->time = time();
    }

    /**
     * 关注\取消关注 推送消息.
     */
    public function subscribe()
    {
        $toUser = $this->to_user;
        $fromUser = $this->from_user;
        $content = '欢迎关注 khs1994.com 测试微信公众号，你的OpenID：'.$fromUser;

        return Response::text($fromUser, $toUser, $content);
    }

    /**
     * 扫描带参数二维码
     */
    public function scan(): void
    {
        $postXMLObj = $this->postXMLObj;
        $key = $postXMLObj->EventKey;
        $username = $this->from_user;
        $time = $this->create_time;
        $ticket = $postXMLObj->Ticket;
    }

    /**
     * 用户进入对话页，自动上传位置信息.
     */
    public function autoUploadLocation(): void
    {
        $postXMLObj = $this->postXMLObj;
        $gps_latitude = $postXMLObj->Latitude;       //地理位置纬度
        $gps_longitude = $postXMLObj->Longitude;     //地理位置经度
        $precision = $postXMLObj->Precision;         //地理位置精度
    }

    /**
     * 以下为菜单相关消息.
     *
     * 点击菜单拉取消息
     *
     * @see https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1421141016
     */
    public function click(): void
    {
        $eventKey = $this->postXMLObj->EventKey;
    }

    /**
     * 点击菜单跳转链接.
     */
    public function view(): void
    {
        $postXMLObj = $this->postXMLObj;
        $eventKey = $postXMLObj->EventKey;
        $menuId = $postXMLObj->MenuID;
    }

    /**
     * 扫码推事件.
     */
    public function scancode_push(): void
    {
        $postXMLObj = $this->postXMLObj;
        $eventKey = $postXMLObj->EventKey;
        $scanType = $postXMLObj->ScanType;
        $scanResult = $postXMLObj->ScanResult;
    }

    /**
     * 扫码推事件且弹出“消息接收中”提示框.
     */
    public function scancode_waitmsg(): void
    {
        $postXMLObj = $this->postXMLObj;
        $eventKey = $postXMLObj->EventKey;
        $scanCodeInfo = $postXMLObj->ScanCodeInfo;
        $scanType = $postXMLObj->ScanType;
        $scanResult = $postXMLObj->ScanResult;
    }

    /**
     * 弹出系统拍照发图.
     */
    public function pic_sysphoto(): void
    {
        $postXMLObj = $this->postXMLObj;
        $eventKey = $postXMLObj->EventKey;
        $sendPicsInfo = $postXMLObj->SendPicsInfo;
        $count = $postXMLObj->Count;
        $picList = $postXMLObj->PicList;
        $PicMd5Sum = $postXMLObj->PicMd5Sum;
    }

    /**
     * 弹出拍照或者相册发图.
     */
    public function pic_photo_or_album(): void
    {
        $postXMLObj = $this->postXMLObj;
        $eventKey = $postXMLObj->EventKey;
        $sendPicsInfo = $postXMLObj->SendPicsInfo;
        $count = $postXMLObj->Count;
        $picList = $postXMLObj->PicList;
        $PicMd5Sum = $postXMLObj->PicMd5Sum;
    }

    /**
     * 弹出微信相册发图器.
     */
    public function pic_weixin(): void
    {
        $postXMLObj = $this->postXMLObj;
        $eventKey = $postXMLObj->EventKey;
        $sendPicsInfo = $postXMLObj->SendPicsInfo;
        $count = $postXMLObj->Count;
        $picList = $postXMLObj->PicList;
        $PicMd5Sum = $postXMLObj->PicMd5Sum;
    }

    /**
     * 弹出地理位置选择器.
     */
    public function location_select(): void
    {
        $postXMLObj = $this->postXMLObj;

        $SendLocationInfo = $postXMLObj->SendLocationInfo;
        $lat = $SendLocationInfo->Location_X;
        $long = $SendLocationInfo->Location_Y;
        $Label = $SendLocationInfo->Label;
    }

    /**
     * 菜单相关消息结束
     *
     * 地理位置消息
     */
    public function location(): void
    {
        $postXMLObj = $this->postXMLObj;
        $location_x = $postXMLObj->Location_X;
        $location_y = $postXMLObj->Location_Y;
        $scale = $postXMLObj->Scale;
        $label = $postXMLObj->Label;
    }

    /**
     * 链接消息.
     */
    public function link(): void
    {
        $postXMLObj = $this->postXMLObj;
        $title = $postXMLObj->Title;
        $description = $postXMLObj->Description;
        $url = $postXMLObj->Url;
    }

    /**
     * 以下为 微信认证事件.
     *
     * 资质认证成功
     */
    public function qualification_verify_success(): void
    {
        $postXMLObj = $this->postXMLObj;
        $expiredTime = $postXMLObj->ExpiredTime;
    }

    /**
     * 资质认证失败.
     */
    public function qualification_verify_fail(): void
    {
        $postXMLObj = $this->postXMLObj;
        $failTime = $postXMLObj->FailTime;
        $failReason = $postXMLObj->FailReason;
    }

    /**
     * 名称认证成功（即命名成功）.
     */
    public function naming_verify_success(): void
    {
        $postXMLObj = $this->postXMLObj;
        $expiredTime = $postXMLObj->ExpiredTime;
    }

    /**
     * 名称认证失败（这时虽然客户端不打勾，但仍有接口权限）.
     */
    public function naming_verify_fail(): void
    {
        $postXMLObj = $this->postXMLObj;
        $failTime = $postXMLObj->FailTime;
        $failReason = $postXMLObj->FailReason;
    }

    /**
     * 年审通知.
     */
    public function annual_renew(): void
    {
        $postXMLObj = $this->postXMLObj;
        $ExpiredTime = $postXMLObj->ExpiredTime;
    }

    /**
     * 认证过期失效通知.
     */
    public function verify_expired(): void
    {
        $postXMLObj = $this->postXMLObj;
        $ExpiredTime = $postXMLObj->ExpiredTime;
    }
}
