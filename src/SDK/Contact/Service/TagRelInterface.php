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

namespace Eelly\SDK\Contact\Service;

/**
 * 联系人标签关系.
 *
 * @author  肖俊明<xiaojunming@eelly.net>
 *
 * @since 2017年10月12日
 */
interface TagRelInterface
{
    /**
     * 根据客户id批量获取标签名称.
     *
     * @param array $contactIds 联系人ID，自增主键
     *
     * @throws \Eelly\Exception\LogicException
     *
     * @return array
     * @requestExample({contactIds:{148086,1,2}})
     * @returnExample({"contactId": 1,"name": "呵呵李伟权"})
     *
     * @author 肖俊明<xiaojunming@eelly.net>
     *
     * @since 2017年10月12日
     * @Validation(
     *   @OperatorValidator(0,{message : "联系人标签关系ID"})
     *  )
     */
    public function getTagNameByContactIds(array $contactIds): array;
}
