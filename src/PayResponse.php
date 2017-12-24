<?php
/**
 * Created by PhpStorm.
 * User: shaojie
 * Date: 2017/12/24
 * Time: 22:29
 */

namespace Woodfish\Component\Payment\Sdk\PayClient;


class PayResponse extends BaseResponse
{

    /** @var  string */
    protected $trade_no;

    /** @var  int */
    protected $amount;

    /** @var  string */
    protected $create_time;

    /** @var  string */
    protected $gateway_url;

    /** @var  array */
    protected $credential;

    /** @var  int */
    protected $status;

    /** @var  string */
    protected $success_time;

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
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * @param string $create_time
     */
    public function setCreateTime($create_time)
    {
        $this->create_time = $create_time;
    }

    /**
     * @return string
     */
    public function getGatewayUrl()
    {
        return $this->gateway_url;
    }

    /**
     * @param string $gateway_url
     */
    public function setGatewayUrl($gateway_url)
    {
        $this->gateway_url = $gateway_url;
    }

    /**
     * @return array
     */
    public function getCredential()
    {
        return $this->credential;
    }

    /**
     * @param array $credential
     */
    public function setCredential($credential)
    {
        $this->credential = $credential;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
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