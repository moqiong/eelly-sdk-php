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

namespace Eelly\SDK\Pay\Service;

/**
 * @author eellytools<localhost.shell@gmail.com>
 */
interface SubjectDayInterface
{
    /**
     * 新增科目日记帐信息
     * 
     * @return bool
     * 
     * @param string $data 请求参数
     * @param string $data['subjectCode'] 科目代码
     * @param int $data['beforeMoneyDebit'] 昨日余额（借）
     * @param int $data['beforeMoneyCredit'] 昨日余额（贷）
     * @param int $data['todayMoneyDebit'] 今日发生额（借）
     * @param int $data['todayMoneyCredit'] 今日发生额（贷）
     * @param int $data['remark'] 备注
     * 
     * @requestExample()
     * @returnExample()
     * 
     * @author wechan<lliweiquan@eelly.net>
     * @since 2017年11月13日
     */
    public function addSubjectDay(array $data): bool;
    
    /**
     * 获取一条科目日记帐信息的对象
     * 
     * 
     * @param string $subjectCode 科目代码
     * @param string $workDate 结算日期
     * 
     * @requestExample()
     * @returnExample()
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月17日
     */
    public function getSubjectDayObject(string $subjectCode, string $workDate);
}
