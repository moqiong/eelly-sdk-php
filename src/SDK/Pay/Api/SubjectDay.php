<?php

declare(strict_types=1);
/*
 * PHP version 7.1
 *
 * @copyright Copyright (c) 2012-2017 EELLY Inc. (https://www.eelly.com)
 * @link      https://api.eelly.com
 * @license   衣联网版权所有
 */

namespace Eelly\SDK\Pay\Api;

use Eelly\SDK\EellyClient;
use Eelly\SDK\Pay\Service\SubjectDayInterface;

/**
 *
 * @author eellytools<localhost.shell@gmail.com>
 */
class SubjectDay implements SubjectDayInterface
{

    /**
     * 获取一条科目日记帐信息
     * 
     * @return array 科目日记账信息
     * 
     * @param string $subjectCode 科目代码
     * @param string $workDate 结算日期
     * 
     * @requestExample({"subjectCode":1102,"workDate":20171118})
     * @returnExample({"work_date":"20171122","subject_code":"110","before_money_debit":"0","before_money_credit":"0","today_money_debit":"0","today_money_credit":"0","remark":"","created_time":"1511320979","update_time":"2017-11-22 11:22:59"})
     * 
     * @author wechan<liweiquan@eelly.net>
     * @since 2017年11月11日
     */
    public function getOneSubjectDay(string $subjectCode, string $workDate): array
    {
        return EellyClient::request('pay/subjectday', 'getOneSubjectDay', true, $subjectCode, $workDate);
    }

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
     * @requestExample({"data":{"subjectCode":"20151111","beforeMoneyDebit":0,"beforeMoneyCredit":0,"todayMoneyDebit":0,"todayMoneyCredit":0,"remark":"311"}})
     * @returnExample(true)
     * 
     * @author wechan<lliweiquan@eelly.net>
     * @since 2017年11月13日
     */
    public function addSubjectDay(array $data): bool
    {
        return EellyClient::request('pay/subjectday', 'addSubjectDay', true, $data);
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