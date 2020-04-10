<?php

declare(strict_types=1);

namespace WeChat\Users;

use WeChat\WeChat;

/**
 * Class Tag.
 *
 * 用户标签管理
 *
 * @see https://mp.weixin.qq.com/wiki?t=resource/res_main&id=mp1421140837
 */
class Tag
{
    const WECHAT_URL = 'https://api.weixin.qq.com/cgi-bin/tags/';

    const CREATE = self::WECHAT_URL.'create?';

    const GET = self::WECHAT_URL.'get?';

    const UPDATE = self::WECHAT_URL.'update?';

    const DELETE = self::WECHAT_URL.'delete?';

    const TAG_USERS = 'https://api.weixin.qq.com/cgi-bin/user/tag/get?';

    const BATCH_TAG = self::WECHAT_URL.'members/batchtagging?';

    const BATCH_UNTAG = self::WECHAT_URL.'members/batchuntagging?';

    const USER_TAG = self::WECHAT_URL.'getidlist?';

    private static $access_token;

    private static $curl;

    /**
     * Tag constructor.
     *
     * @throws \Exception
     */
    public function __construct(WeChat $app)
    {
        self::$access_token = $app->access_token->get();

        self::$curl = $app['curl'];
    }

    /**
     * 创建标签.
     *
     * @return mixed
     */
    public function create(string $tagName)
    {
        return self::$curl->post(self::CREATE.self::$access_token, json_encode([
                'tag' => [
                    'name' => $tagName,
                ],
            ]
        ));
    }

    /**
     * 获取公众号已创建标签.
     */
    public function get()
    {
        return self::$curl->get(self::GET.self::$access_token);
    }

    /**
     * 编辑标签.
     *
     * @return mixed
     */
    public function update(int $id, string $tagName)
    {
        return self::$curl->post(self::UPDATE.self::$access_token, json_encode([
                'tag' => [
                    'id' => $id,
                    'name' => $tagName,
                ],
            ]
        ));
    }

    /**
     * 删除标签.
     *
     * @return mixed
     */
    public function delete(int $id)
    {
        return self::$curl->post(self::DELETE.self::$access_token, json_encode([
                'tag' => [
                    'id' => $id,
                ],
            ]
        ));
    }

    /**
     * 获取标签下用户列表.
     *
     * @return mixed
     */
    public function getUsers(int $id, string $openId = null)
    {
        return self::$curl->get(self::TAG_USERS.self::$access_token, json_encode(array_filter([
                'tagid' => $id,
                'next_openid' => $openId,
            ]
        )));
    }

    /**
     * 批量为用户打标签.
     *
     * @return mixed
     */
    public function batch(array $openIdList, int $id)
    {
        return self::$curl->post(self::BATCH_TAG.self::$access_token, json_encode([
                'openid_list' => $openIdList,
                'tagid' => $id,
            ]
        ));
    }

    /**
     * 批量为用户取消标签.
     *
     * @return mixed
     */
    public function batchDelete(array $openIdList, int $id)
    {
        return self::$curl->post(self::BATCH_UNTAG.self::$access_token, json_encode([
                'openid_list' => $openIdList,
                'tagid' => $id,
            ]
        ));
    }

    /**
     * 获取用户身上的标签列表.
     *
     * @return mixed
     */
    public function getUser(string $openID)
    {
        return self::$curl->post(self::USER_TAG.self::$access_token, json_encode([
                'openid' => $openID,
            ]
        ));
    }
}
