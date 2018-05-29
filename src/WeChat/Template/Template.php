<?php

namespace WeChat\Template;

use WeChat\Support\Response;
use WeChat\WeChat;

/**
 * 模板消息
 *
 * Class Template
 * @package App\Http\Controllers\SDK\Template
 * @link    https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1433751277
 */
class Template
{
    const WECHAT = 'https://api.weixin.qq.com/cgi-bin/template/';

    const SET_INDUSTRY = self::WECHAT.'api_set_industry?';

    const GET_INDUSTRY = self::WECHAT.'get_industry?';

    const GET_ID = self::WECHAT.'api_add_template?';

    const SEND_URL = 'https://api.weixin.qq.com/cgi-bin/message/template/send?';

    const GET_LIST_URL = self::WECHAT.'get_all_private_template?';

    const DELETE_URL = self::WECHAT.'del_private_template?';

    private $curl;

    private $access_token;

    public function __construct(Wechat $app)
    {
        $this->curl = $app['curl'];
        $this->access_token = $app->access_token->get();
    }

    /**
     * 设置所属行业
     *
     * 每月可修改行业 1 次，行业代码请查看官方文档 1-41
     *
     * @param  array $industry
     *
     * @return mixed
     * @example
     * <pre>
     * setIndustry([1,2]);
     * <pre>
     */
    public function setIndustry(array $industry)
    {
        $industryArray = [];
        $id = 0;
        foreach ($industry as $k) {
            $id++;
            $industryArray["industry_id$id"] = $k;
        }
        $url = self::SET_INDUSTRY.$this->access_token;
        $request = json_encode($industryArray);
        $json = $this->curl->post($url, $request);

        return Response::json($json);
    }

    /** 获取设置的行业信息
     *
     * @return mixed
     */
    public function getIndustry()
    {
        $url = self::GET_INDUSTRY.$this->access_token;
        $data = $this->curl->get($url);

        return Response::json($data);
    }

    /**
     * 获取模板库中的模板的 ID
     *
     * @param  string $id
     *
     * @return mixed
     * @example
     * <pre>
     * getTemplate('TM00015');
     * <pre>
     */
    public function getTemplateId(string $id)
    {
        $url = self::GET_ID.$this->access_token;
        $data = ['template_id_short' => $id];
        $request = json_encode($data);
        $json = $this->curl->post($url, $request);

        return Response::json($json);
    }

    /**
     * 获取模板列表
     *
     * @return mixed
     */
    public function getList()
    {
        $url = self::GET_LIST_URL.$this->access_token;
        $data = $this->curl->get($url);

        return Response::json($data);
    }

    /**
     * 删除模板
     *
     * @param string $id
     *
     * @return mixed
     */
    public function delete(string $id)
    {
        $url = self::DELETE_URL.$this->access_token;
        $data = ['template_id' => $id];
        $request = json_encode($data);
        $data = $this->curl->post($url, $request);

        return Response::json($data);
    }

    /**
     * 发送模板消息
     *
     * @param array|null $data
     *
     * @return mixed
     */
    public function send(array $data)
    {
        $url = self::SEND_URL.$this->access_token;
        $request = json_encode($data);
        $res = $this->curl->post($url, $request);

        return Response::json($res);
    }
}
