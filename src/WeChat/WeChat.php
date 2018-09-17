<?php

declare(strict_types=1);

namespace WeChat;

use Curl\Curl;
use Pimple\Container;
use Redis;
use WeChat\Exceptions\WechatException;
use WeChat\Kernel\Support\Request;

/**
 * @property AccessToken\AccessToken $access_token
 *
 * @method AccessToken\AccessToken access_token()
 *
 * @property AI\Client       $ai
 * @property Base\Client     $base
 * @property Server\Server   $server
 * @property Temp\Client     $temp
 * @property Template\Client $template_message
 * @property Curl            $curl
 * @property Url\Client      $url
 * @property Redis           $cache
 * @property request         $request
 */
class WeChat extends Container
{
    private $providers = [
        AccessToken\ServiceProvider::class,
        AI\ServiceProvider::class,
        Analysis\ServiceProvider::class,
        Base\ServiceProvider::class,
        Comment\ServiceProvider::class,
        CustomService\ServiceProvider::class,
        Material\ServiceProvider::class,
        Message\ServiceProvider::class,
        Server\ServiceProvider::class,
        Temp\ServiceProvider::class,
        Template\ServiceProvider::class,
        Url\ServiceProvider::class,
    ];

    /**
     * WeChat constructor.
     *
     * @param string $app_id
     * @param string $app_secret
     * @param string $token
     * @param        $cache
     * @param string $tencent_ai_appid
     * @param string $tencent_ai_appkey
     * @param array  $options
     */
    public function __construct(string $app_id,
                                string $app_secret,
                                string $token,
                                Redis $cache,
                                string $tencent_ai_appid,
                                string $tencent_ai_appkey,
                                array $options = [])
    {
        $config = [
            'app_id' => $app_id,
            'app_secret' => $app_secret,
            'token' => $token,
            'tencent_ai_appid' => $tencent_ai_appid,
            'tencent_ai_appkey' => $tencent_ai_appkey,
            'cache' => $cache,
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
