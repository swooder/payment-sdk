<?php
/**
 * Created by PhpStorm.
 * User: shaojie
 * Date: 2017/12/24
 * Time: 23:23
 */

namespace Woodfish\Component\Payment\Sdk\PayClient;


class BaseResponse extends Base
{
    /** @var  string */
    protected $status;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}