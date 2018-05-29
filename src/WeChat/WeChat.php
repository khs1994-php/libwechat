<?php

declare(strict_types=1);

namespace WeChat;

use Curl\Curl;
use Pimple\Container;
use Redis;

/**
 * @property AccessToken\AccessToken $access_token
 * @property Message\Message         $message_server
 * @property Template\Template       $template_message
 * @property Curl                    $curl
 * @property Redis                   $cache
 */
class WeChat extends Container
{
    private $providers = [
        AccessToken\ServiceProvider::class,
        Message\MessageProvider::class,
        Template\TemplateProvider::class,
    ];

    public function __construct(string $app_id, string $app_secret, string $token, Redis $cache)
    {
        $config = [
            'APP_ID' => $app_id,
            'APP_SECRET' => $app_secret,
            'TOKEN' => $token,
        ];

        $this['cache'] = $cache;
        $this['curl'] = new Curl();

        $this->registryServices();

        parent::__construct($config);
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
        if ($this[$name] ?? false) {
            return $this[$name];
        }

        throw new \Exception('', 404);
    }
}
