<?php
/**
 * Created by PhpStorm.
 * User: shaojie
 * Date: 2017/12/24
 * Time: 23:06
 */

namespace Woodfish\Component\Payment\Sdk\PayClient;


class NotifyResponse extends BaseResponse
{

    /** @var  string */
    protected $trade_no;
    /** @var  string */
    protected $transaction_no;

    /** @var  int */
    protected $amount;

    /** @var  string */
    protected $success_time;

    /** @var  string */
    protected $seller = '';

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

    /**
     * @return string
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param string $seller
     */
    public function setSeller($seller)
    {
        $this->seller = $seller;
    }



}