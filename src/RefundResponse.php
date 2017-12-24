<?php
/**
 * Created by PhpStorm.
 * User: shaojie
 * Date: 2017/12/24
 * Time: 23:07
 */

namespace Woodfish\Component\Payment\Sdk\PayClient;


class RefundResponse extends BaseResponse
{

    /** @var  int */
    protected $amount;

    /** @var  string */
    protected $refund_no;

    /** @var  string */
    protected $trade_no;

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getRefundNo()
    {
        return $this->refund_no;
    }

    /**
     * @param string $refund_no
     */
    public function setRefundNo($refund_no)
    {
        $this->refund_no = $refund_no;
    }

    /**
     * @return string
     */
    public function getTradeNo()
    {
        return $this->trade_no;
    }

    /**
     * @param string $trade_no
     */
    public function setTradeNo($trade_no)
    {
        $this->trade_no = $trade_no;
    }




}