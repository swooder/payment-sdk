<?php
/**
 * Created by PhpStorm.
 * User: shaojie
 * Date: 2017/12/24
 * Time: 23:33
 */

namespace Woodfish\Component\Payment\Sdk\PayClient;


class PayCloseRequest extends BaseRequest
{

    public function getEndPoint()
    {
        return "close";
    }
}