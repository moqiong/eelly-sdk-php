<?php

declare(strict_types=1);
/*
 * This file is part of eelly package.
 *
 * (c) eelly.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eelly\SDK\Goods\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Goods\Service\LikeInterface;

/**
 *
 * @author shadonTools<localhost.shell@gmail.com>
 */
class Like implements LikeInterface
{
    /**
     * 根据商品id获取是否是指定商品点赞配置信息,并返回配置信息
     * 
     * > 返回数据说明
     *
     * key          | type      | value
     * ------------ |------     | --------
     * gliId        | int       | 商品点赞ID
     * goodsId      | int       | 商品id
     * requireLikes | int       | 需要点赞数
     * limitNum     | int       | 限购数量
     * createdTime  | int       | 添加时间
     * updateTime   | string    | 修改时间
     * 
     * @param int $goodsId 商品id
     * 
     * @returnExample({"gliId":"1","goodsId":"1488888","requireLikes":"10","limitNum":"1","createdTime":"1111111111","updateTime":"2018-06-28 09:11:15"});
     * 
     * @return array
     * 
     * @author wechan
     * @since 2018年6月28日
     */
    public function getGoodsLikeSettingInfoById(int $goodsId): array
    {
        return EellyClient::request('goods/like', 'getGoodsLikeSettingInfoById', true, $goodsId);
    }

    /**
     * 根据商品id获取是否是指定商品点赞配置信息,并返回配置信息
     * 
     * > 返回数据说明
     *
     * key          | type      | value
     * ------------ |------     | --------
     * gliId        | int       | 商品点赞ID
     * goodsId      | int       | 商品id
     * requireLikes | int       | 需要点赞数
     * limitNum     | int       | 限购数量
     * createdTime  | int       | 添加时间
     * updateTime   | string    | 修改时间
     * 
     * @param int $goodsId 商品id
     * 
     * @returnExample({"gliId":"1","goodsId":"1488888","requireLikes":"10","limitNum":"1","createdTime":"1111111111","updateTime":"2018-06-28 09:11:15"});
     * 
     * @return array
     * 
     * @author wechan
     * @since 2018年6月28日
     */
    public function getGoodsLikeSettingInfoByIdAsync(int $goodsId)
    {
        return EellyClient::request('goods/like', 'getGoodsLikeSettingInfoById', false, $goodsId);
    }

    /**
     * @return self
     */
    public static function getInstance(): self
    {
        static $instance;
        if (null === $instance) {
            $instance = new self();
        }

        return $instance;
    }
}