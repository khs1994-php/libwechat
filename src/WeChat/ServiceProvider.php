<?php

declare(strict_types=1);

namespace WeChat;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $configPath = __DIR__.'/../../config/wechat.php';

    public function boot(): void
    {
        $this->mergeConfigFrom($this->configPath, 'wechat');

        $this->app->signleton(WeChat::class, function () {
            $app_name = config('wechat.default');

            return new WeChat(
                config('wechat.'.$app_name.'.app_id'),
                config('wechat.'.$app_name.'.app_secret'),
                config('wechat.'.$app_name.'.token'),
                (new Redis()),
                config('wechat.'.$app_name.'tencent_ai.app_id'),
                config('wechat.'.$app_name.'tencent.ai_app_secret')
            );
        });

        $this->app->alias(WeChat::class, 'wechat');
    }

    public function register(): void
    {
        $this->publishes([$this->configPath => config_path('wechat.php')], 'config');
    }
}
