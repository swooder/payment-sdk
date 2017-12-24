<?php
/**
 * Created by PhpStorm.
 * User: shaojie
 * Date: 2017/12/24
 * Time: 23:08
 */

namespace Woodfish\Component\Payment\Sdk\PayClient;


class RefundNotifyResponse extends BaseResponse
{


    /** @var  string */
    protected $refund_no;

    /** @var  string */
    protected $trade_no;


    /** @var  string */
    protected $transaction_no;

    /** @var  string */
    protected $success_time;

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
    public function getTransactionNo()
    {
        return $this->transaction_no;
    }

    /**
     * @param string $transaction_no
     */
    public function setTransactionNo($transaction_no)
    {
        $this->transaction_no = $transaction_no;
    }

    /**
     * @return string
     */
    public function getSuccessTime()
    {
        return $this->success_time;
    }

    /**
     * @param string $success_time
     */
    public function setSuccessTime($success_time)
    {
        $this->success_time = $success_time;
    }


}