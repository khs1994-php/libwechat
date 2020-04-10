<?php

declare(strict_types=1);

namespace WeChat\OAuth;

use WeChat\Kernel\Support\Response;
use WeChat\WeChat;

/**
 * Class OAuth.
 *
 * 微信网页授权
 *
 * 如果用户在微信客户端中访问第三方网页，公众号可以通过微信网页授权机制，来获取用户基本信息，进而实现业务逻辑
 *
 * @see https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1421140842
 */
class Client
{
    const WECHAT = 'https://api.weixin.qq.com/sns/';

    const BASE_URL = 'https://open.weixin.qq.com/connect/oauth2/authorize?';

    const ACCESS_TOKEN_URL = self::WECHAT.'oauth2/access_token?';

    const REFRESH = self::WECHAT.'oauth2/refresh_token?';

    const USER_INFO = self::WECHAT.'userinfo?';

    /**
     * @var Curl\Curl
     */
    private $curl;

    private $app_id;

    private $app_secret;

    protected $callback_url;

    public function __construct(WeChat $app)
    {
        $this->app_id = $app['app_id'];
        $this->app_secret = $app['app_secret'];
        $this->curl = $app['curl'];
        $this->callback_url = $app['callback_url'];
    }

    /**
     * 返回登录页面.
     *
     * @example
     *
     * <pre>
     * appid=APPID&redirect_uri=REDIRECT_URI&response_type=code&scope=SCOPE&state=STATE#wechat_redirect
     * <pre>
     */
    public function login(string $base_or_userinfo = 'base'): void
    {
        $type = 'base' === $base_or_userinfo ? 'snsapi_base' : 'snsapi_userinfo';
        $state = session_create_id();
        $request_body = [
            'appid' => $this->app_id,
            'redirect_uri' => $this->callback_url,
            'response_type' => 'code',
            'scope' => $type,
            'state' => $state,
        ];
        $url = self::BASE_URL.http_build_query($request_body).'#wechat_redirect';

        Response::redirect($url);
    }

    /**
     * 回调页面.
     *
     * @return array|mixed 返回用户基本信息
     *
     * @example
     *
     * <pre>
     * appid=APPID&secret=SECRET&code=CODE&grant_type=authorization_code
     * <pre>
     */
    public function callback()
    {
        $code = $_GET['code'] ?? null;
        $data = [
            'appid' => $this->app_id,
            'secret' => $this->app_secret,
            'code' => $code,
            'grant_type' => 'authorization_code',
        ];
        $url = self::ACCESS_TOKEN_URL.http_build_query($data);
        $data = json_decode($this->curl->get($url));

        if (property_exists($data, 'errcode')) {
            return (array) $data;
        }

        $access_token = $data->access_token;
        $expires_in = $data->expires_in;
        $refresh_token = $data->refresh_token;
        $open_id = $data->openid;
        $scope = $data->scope;

        if ('snsapi_base' === $scope) {
            return (array) $data;
        }
        $data = $this->getUserInfo($access_token, $open_id);

        return Response::json($data);
    }

    /**
     * 刷新 AccessToken.
     */
    public function refreshAccessToken(string $refresh_token): void
    {
        $data = [
            'appid' => $this->app_id,
            'grant_type' => 'refresh_token',
            'refresh_token' => $refresh_token,
        ];
        $url = self::REFRESH.http_build_query($data);
        $data = json_decode($this->curl->get($url));

        $access_token = $data->access_token;
        $expires_in = $data->expires_in;
        $refresh_token = $data->refresh_token;
        $open_id = $data->openid;
        $scope = $data->scope;
    }

    /**
     * 获取用户基本信息.
     *
     * @return mixed
     */
    private function getUserInfo(string $access_token, string $open_id, string $language = 'zh_CN')
    {
        $data = [
            'access_token' => $access_token,
            'openid' => $open_id,
            'lang' => $language,
        ];
        $url = self::USER_INFO.http_build_query($data);

        return $this->curl->get($url);
    }

    /**
     * 验证 AccessToken.
     *
     * @param $access_token
     * @param $open_id
     *
     * @return mixed
     */
    public function vaildAccessToken(string $access_token, string $open_id)
    {
        $data = [
            'access_token' => $access_token,
            'openid' => $open_id,
        ];
        $url = self::WECHAT.'auth?'.http_build_query($data);
        $data = $this->curl->get($url);

        return Response::json($data);
    }
}
