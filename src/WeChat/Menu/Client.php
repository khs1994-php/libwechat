<?php

declare(strict_types=1);

namespace WeChat\Menu;

use Exception;
use WeChat\WeChat;

class Client
{
    const BASE_URL = 'https://api.weixin.qq.com/cgi-bin/menu/';

    private $access_token;

    private $curl;

    /**
     * Menu constructor.
     *
     * @param WeChat $app
     *
     * @throws Exception
     */
    public function __construct(WeChat $app)
    {
        $this->access_token = $app->access_token->get();
        $this->curl = $app->curl;
    }

    private function getUrl(string $type)
    {
        if ('get_current_selfmenu_info' === $type) {
            return 'https://api.weixin.qq.com/cgi-bin/'.$type.'?'.$this->access_token;
        }
        $url = self::BASE_URL.$type.'?'.$this->access_token;

        return $url;
    }

    /**
     * 创建菜单.
     *
     * @method post
     *
     * @param array $data
     *
     * @return string
     *
     * @example
     * <pre>
     * {"errcode":0,"errmsg":"ok"}
     *
     * {"errcode":40018,"errmsg":"invalid button name size"}
     * <pre>
     *
     * @see   https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1421141013
     *
     * @throws Exception
     */
    public function create(array $data)
    {
        $url = $this->getUrl('create');
        $request = urldecode(json_encode($data, JSON_UNESCAPED_UNICODE));
        $json = $this->curl->post($url, $request);

        return $json;
    }

    /**
     * 查询自定义菜单.
     *
     * 在设置了个性化菜单后，使用本自定义菜单查询接口可以获取默认菜单和全部个性化菜单信息.
     *
     * @method get
     *
     * @return string
     *
     * @see   https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1421141014
     *
     * @throws Exception
     */
    public function get()
    {
        $url = $this->getUrl('get');
        $json = $this->curl->get($url);

        return $json;
    }

    /**
     * 删除菜单.
     *
     * 在个性化菜单时，调用此接口会删除默认菜单及全部个性化菜单
     *
     * @method delete
     *
     * @return mixed
     *
     * @example
     *
     * <pre>
     * {"errcode":0,"errmsg":"ok"}
     * <pre>
     *
     * @see https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1421141015
     *
     * @throws Exception
     */
    public function delete()
    {
        $url = $this->getUrl('delete');
        $json = $this->curl->get($url);

        return $json;
    }

    /**
     * 创建个性化菜单.
     *
     * @method post
     *
     * @param array $data
     *
     * @return string
     *
     * @example
     *
     * <pre>
     * {"menuid":"208379533"}
     * <pre>
     *
     * @see   https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1455782296
     *
     * @throws Exception
     */
    public function createConditional(array $data)
    {
        $url = $this->getUrl('addconditional');
        $request = urldecode(json_encode($data, JSON_UNESCAPED_UNICODE));
        $json = $this->curl->post($url, $request);

        return $json;
    }

    /**
     * 删除个性化菜单.
     *
     * @method delete
     *
     * @param string $menuId
     *
     * @return string
     *
     * @example
     *
     * <pre>
     * {"errcode":0,"errmsg":"ok"}
     * <pre>
     *
     * @throws Exception
     */
    public function deleteConditional(string $menuId)
    {
        $url = $this->getUrl('delconditional');
        $data = ['menuid' => $menuId];
        $request = urlencode(json_encode($data));
        $json = $this->curl->post($url, $request);

        return $json;
    }

    /**
     * 测试个性化菜单匹配结果.
     *
     * @method get
     *
     * @param string $userOpenID
     *
     * @return string 返回菜单配置
     *
     * @throws Exception
     */
    public function tryMatch(string $userOpenID)
    {
        $url = $this->getUrl('trymatch');
        $data = ['user_id' => $userOpenID];
        $request = urlencode(json_encode($data));
        $json = $this->curl->post($url, $request);

        return $json;
    }

    /**
     * 获取自定义菜单配置.
     *
     * 本接口与自定义菜单查询接口的不同之处在于，本接口无论公众号的接口是如何设置的，都能查询到接口.
     *
     * 而自定义菜单查询接口则仅能查询到使用API设置的菜单配置.
     *
     * @return mixed
     *
     * @throws Exception
     */
    public function getAll()
    {
        $url = $this->getUrl('get_current_selfmenu_info');
        $json = $this->curl->get($url);

        return $json;
    }
}
