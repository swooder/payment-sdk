<?php
/**
 * Created by PhpStorm.
 * User: shaojie
 * Date: 2017/12/24
 * Time: 22:29
 */

namespace Woodfish\Component\Payment\Sdk\PayClient;


class PayRequest extends BaseRequest
{
    /** @var  string */
    protected $src_no;

    /** @var  string */
    protected $subject;

    /** @var  string */
    protected $amount;

    /** @var  string */
    protected $expire_time;

    /** @var  string */
    protected $client_ip;

    /** @var  string */
    protected $open_id = '';

    /** @var  string */
    protected $notify_url = '';

    /** @var  string */
    protected $return_url = '';

    /** @var string  */
    protected $time_stamp = '';

    /** @var string  */
    protected $nonce_str = '';

    /** @var string  */
    protected $pay_password = '';

    /** @var int 1 实物, 0虚拟 */
    protected $goods_type = 1;

    /**
     * @return string
     */
    public function getSrcNo()
    {
        return $this->src_no;
    }

    /**
     * @param string $src_no
     */
    public function setSrcNo($src_no)
    {
        $this->src_no = $src_no;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    /**
     * @param string $expire_time
     */
    public function setExpireTime($expire_time)
    {
        $this->expire_time = $expire_time;
    }

    /**
     * @return string
     */
    public function getClientIp()
    {
        return $this->client_ip;
    }

    /**
     * @param string $client_ip
     */
    public function setClientIp($client_ip)
    {
        $this->client_ip = $client_ip;
    }

    /**
     * @return string
     */
    public function getOpenId()
    {
        return $this->open_id;
    }

    /**
     * @param string $open_id
     */
    public function setOpenId($open_id)
    {
        $this->open_id = $open_id;
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

    /**
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->return_url;
    }

    /**
     * @param string $return_url
     */
    public function setReturnUrl($return_url)
    {
        $this->return_url = $return_url;
    }

    /**
     * @return string
     */
    public function getTimeStamp()
    {
        return $this->time_stamp;
    }

    /**
     * @param string $time_stamp
     */
    public function setTimeStamp($time_stamp)
    {
        $this->time_stamp = $time_stamp;
    }

    /**
     * @return string
     */
    public function getNonceStr()
    {
        return $this->nonce_str;
    }

    /**
     * @param string $nonce_str
     */
    public function setNonceStr($nonce_str)
    {
        $this->nonce_str = $nonce_str;
    }

    /**
     * @return string
     */
    public function getPayPassword()
    {
        return $this->pay_password;
    }

    /**
     * @param string $pay_password
     */
    public function setPayPassword($pay_password)
    {
        $this->pay_password = $pay_password;
    }

    /**
     * @return int
     */
    public function getGoodsType()
    {
        return $this->goods_type;
    }

    /**
     * @param int $goods_type
     */
    public function setGoodsType($goods_type)
    {
        $this->goods_type = $goods_type;
    }

    public function getEndPoint()
    {
        return 'pay';
    }
}