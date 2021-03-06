<?php

declare(strict_types=1);

namespace WeChat\Kernel\Support;

use WeChat\WeChat;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $configPath = __DIR__.'/../../../../config/wechat.php';

    public function boot(): void
    {
        $this->publishes([$this->configPath => config_path('wechat.php')], 'config');
    }

    public function register(): void
    {
        $this->app->singleton('wechat', function () {
            $app_name = config('wechat.default');

            return self::connection($app_name);
        });

        $this->app->alias('wechat', WeChat::class);

        $this->mergeConfigFrom($this->configPath, 'wechat');
    }

    public static function connection($app_name)
    {
        $redis = new \Redis();

        $redis->connect(
            env('REDIS_HOST', '127.0.0.1'),
            (int) env('REDIS_PORT', 6379)
        );

        return new WeChat(
            config('wechat.app.'.$app_name.'.app_id'),
            config('wechat.app.'.$app_name.'.app_secret'),
            config('wechat.app.'.$app_name.'.token'),
            $redis,
            config('wechat.app.'.$app_name.'.options', [])
        );
    }
}
