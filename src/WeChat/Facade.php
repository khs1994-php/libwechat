<?php

declare(strict_types=1);

namespace WeChat;

use WeChat\Kernel\Support\Request;

/**
 * @method static AccessToken\AccessToken access_token()
 * @method static AI\Client               ai()
 * @method static Analysis\Client         analysis()
 * @method static Base\Client             base()
 * @method static Comment\Client          comment()
 * @method static CustomService\Client    customService()
 * @method static Material\Client         material()
 * @method static Menu\Client             menu()
 * @method static Message\AutoReplyRule   message_auto_reply_rule()
 * @method static OAuth\Client            oauth()
 * @method static QRC\Client              qrc()
 * @method static Server\Server           server()
 * @method static Temp\Client             temp()
 * @method static Template\Client         template_message()
 * @method static Url\Client              url()
 * @method static Users\Client            users()
 * @method static Users\Black             user_block()
 * @method static Users\Tag               user_tag()
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
