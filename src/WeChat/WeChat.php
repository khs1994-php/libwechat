<?php

declare(strict_types=1);

namespace WeChat;

use Curl\Curl;
use Pimple\Container;
use Redis;
use WeChat\Kernel\Exceptions\WeChatException;
use WeChat\Kernel\Support\Request;

/**
 * @property AccessToken\AccessToken $access_token
 * @property Analysis\Client         $analysis
 * @property Base\Client             $base
 * @property Comment\Client          $comment
 * @property CustomService\Client    $customService
 * @property Material\Client         $material
 * @property Menu\Client             $menu
 * @property Message\AutoReplyRule   $message_auto_reply_rule
 * @property OAuth\Client            $oauth
 * @property QRC\Client              $qrc
 * @property Server\Server           $server
 * @property Temp\Client             $temp
 * @property Template\Client         $template_message
 * @property Url\Client              $url
 * @property Users\Client            $users
 * @property Users\Black             $user_black
 * @property Users\Tag               $user_tag
 * @property Curl                    $curl
 * @property Redis                   $cache
 * @property request                 $request
 */
class WeChat extends Container
{
    private $providers = [
        AccessToken\ServiceProvider::class,
        Analysis\ServiceProvider::class,
        Base\ServiceProvider::class,
        Comment\ServiceProvider::class,
        CustomService\ServiceProvider::class,
        Material\ServiceProvider::class,
        Menu\ServiceProvider::class,
        Message\ServiceProvider::class,
        OAuth\ServiceProvider::class,
        QRC\ServiceProvider::class,
        Server\ServiceProvider::class,
        Temp\ServiceProvider::class,
        Template\ServiceProvider::class,
        Url\ServiceProvider::class,
        Users\ServiceProvider::class,
    ];

    /**
     * WeChat constructor.
     *
     * @param $cache
     */
    public function __construct(string $app_id,
                                string $app_secret,
                                string $token,
                                Redis $cache,
                                array $options = [])
    {
        $config = [
            'app_id' => $app_id,
            'app_secret' => $app_secret,
            'token' => $token,
            'cache' => $cache,
            'callback_url' => $options['callback_url'] ?? null,
        ];

        parent::__construct($config);

        $this['curl'] = new Curl();
        $this['request'] = Request::createFromGlobals();

        $this->registryServices();
    }

    public function registryServices(): void
    {
        foreach ($this->providers as $k) {
            $this->register(new $k());
        }
    }

    /**
     * @param $name
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function __get($name)
    {
        try {
            return $this[$name];
        } catch (\Throwable $e) {
            throw new WeChatException($e->getMessage(), $e->getCode());
        }
    }

    /**
     * @param $name
     * @param $arguments
     *
     * @return mixed
     *
     * @throws \Exception
     */
    public function __call($name, $arguments)
    {
        return $this->__get($name);
    }
}
