<?php
/**
 * Created by PhpStorm.
 * User: shaojie
 * Date: 2017/12/24
 * Time: 23:24
 */

namespace Woodfish\Component\Payment\Sdk\PayClient;


abstract class BaseRequest extends Base
{
    /** @var  string */
    protected $trade_no;

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


    abstract public function getEndPoint();
}