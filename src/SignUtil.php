<?php
/**
 * Created by PhpStorm.
 * User: shaojie
 * Date: 2017/12/24
 * Time: 22:36
 */

namespace Woodfish\Component\Payment\Sdk\PayClient;


class SignUtil
{


    public function createLinkString($params, $sort, $encode)
    {

        $arg = "";
        if ($sort) {
            $params = $this->paramsSort($params);
        }
        foreach ($params as $key => $val) {
            if ($key == 'result_code' || $key == 'result_msg') {
                continue;
            }
            if ($encode) {
                $val = urlencode($val);
            }
            $arg .= $key.'='.$val.'&';
        }
        //去掉最后一个&字符
        $arg = substr($arg, 0, count($arg) - 2);
        //如果存在转义字符，那么去掉转义
        if (get_magic_quotes_gpc()) {
            $arg = stripslashes($arg);
        }

        return $arg;
    }


    public function generateSignedParams(array $data, $secret)
    {
        $params = $this->filterParams($data);
        $stringToSign = $this->createLinkString($params, true, false);
        $sign =  base64_encode(hash_hmac('sha1', $stringToSign, $secret));
        $data['sign'] = $sign;
        return $data;
    }

    private function filterParams(array $data)
    {
        //参数value为array, json_encode成string
        $params = array_map(function($value){
            if (is_array($value)) {
                return json_encode($value);
            } else {
                return $value;
            }
        }, $data);

        $params = array_filter($params, function($value) {
            return $value !== null && $value !== '';
        });
        return $params;
    }

    public function getSign(array $params, $secret)
    {
        $params = $this->filterParams($params);
        $stringToSign = $this->createLinkString($params, true, false);
        $sign =  base64_encode(hash_hmac('sha1', $stringToSign, $secret));
        return $sign;
    }



    public function paramsSort($params)
    {
        ksort($params);
        reset($params);

        return $params;
    }


}