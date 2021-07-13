<?php

declare(strict_types=1);

namespace WeChat\Kernel\Support;

/**
 * @method static \WeChat\AccessToken\AccessToken access_token()
 * @method static \WeChat\Analysis\Client         analysis()
 * @method static \WeChat\Base\Client             base()
 * @method static \WeChat\Comment\Client          comment()
 * @method static \WeChat\CustomService\Client    customService()
 * @method static \WeChat\Material\Client         material()
 * @method static \WeChat\Menu\Client             menu()
 * @method static \WeChat\Message\AutoReplyRule   message_auto_reply_rule()
 * @method static \WeChat\OAuth\Client            oauth()
 * @method static \WeChat\QRC\Client              qrc()
 * @method static \WeChat\Server\Server           server()
 * @method static \WeChat\Temp\Client             temp()
 * @method static \WeChat\Template\Client         template_message()
 * @method static \WeChat\Url\Client              url()
 * @method static \WeChat\Users\Client            users()
 * @method static \WeChat\Users\Black             user_block()
 * @method static \WeChat\Users\Tag               user_tag()
 * @method static Curl\Curl               curl()
 * @method static Redis                   cache()
 * @method static Request                 request()
 */
class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'wechat';
    }
}
