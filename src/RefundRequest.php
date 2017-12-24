<?php
/**
 * Created by PhpStorm.
 * User: shaojie
 * Date: 2017/12/24
 * Time: 23:07
 */

namespace Woodfish\Component\Payment\Sdk\PayClient;


class RefundRequest extends BaseRequest
{
    /** @var  int */
    protected $amount;

    /** @var  int */
    protected $amount_refund;

    /** @var  string */
    protected $refund_no;

    /** @var  string */
    protected $trade_no;

    /** @var string  */
    protected $reason = '';

    /** @var  string */
    protected $notify_url = '';

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
     * @return int
     */
    public function getAmountRefund()
    {
        return $this->amount_refund;
    }

    /**
     * @param int $amount_refund
     */
    public function setAmountRefund($amount_refund)
    {
        $this->amount_refund = $amount_refund;
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

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    /**
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->notify_url;
    }

    /**
     * @param string $notify_url
     */
    public function setNotifyUrl($notify_url)
    {
        $this->notify_url = $notify_url;
    }


    public function getEndPoint()
    {
        return 'refund';
    }
}