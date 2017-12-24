<?php
/**
 * Created by PhpStorm.
 * User: shaojie
 * Date: 2017/12/24
 * Time: 22:28
 */

namespace Woodfish\Component\Payment\Sdk\PayClient;


abstract class Base
{

    /** @var  int */
    protected $merchant_id;

    /** @var  string */
    protected $app_id;

    /** @var  string */
    protected $channel;

    /** @var  string */
    protected $sign;

    /** @var  int */
    protected $result_code;

    /** @var  string */
    protected $result_msg;

    /**
     * @return mixed
     */
    public function getMerchantId()
    {
        return $this->merchant_id;
    }

    /**
     * @param mixed $merchant_id
     */
    public function setMerchantId($merchant_id)
    {
        $this->merchant_id = $merchant_id;
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * @param mixed $app_id
     */
    public function setAppId($app_id)
    {
        $this->app_id = $app_id;
    }

    /**
     * @return mixed
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param mixed $channel
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
    }

    /**
     * @return mixed
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * @param mixed $sign
     */
    public function setSign($sign)
    {
        $this->sign = $sign;
    }

    /**
     * @return mixed
     */
    public function getResultCode()
    {
        return $this->result_code;
    }

    /**
     * @param mixed $result_code
     */
    public function setResultCode($result_code)
    {
        $this->result_code = $result_code;
    }

    /**
     * @return mixed
     */
    public function getResultMsg()
    {
        return $this->result_msg;
    }

    /**
     * @param mixed $result_msg
     */
    public function setResultMsg($result_msg)
    {
        $this->result_msg = $result_msg;
    }

}