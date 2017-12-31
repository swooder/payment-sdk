<?php


namespace Woodfish\Component\Payment\Sdk\PayClient;

use Unirest\Request;


/**
 * Created by PhpStorm.
 * User: shaojie
 * Date: 2017/12/24
 * Time: 22:27
 */

class PayClient
{


    protected $baseUrl = '';
    /** @var $signUtil SignUtil */
    protected $signUtil;

    protected $merchantId;

    protected $merchantSecret;

    /** @var $recursiveArrayObjectUtil RecursiveArrayObjectUtil */
    protected $recursiveArrayObjectUtil;


    public function __construct($merchantId, $merchantSecret, $payPoint)
    {
        $this->merchantId = $merchantId;
        $this->merchantSecret = $merchantSecret;
        if ($payPoint[strlen($payPoint) - 1] === '/') {
            $this->baseUrl = $payPoint;
        } else {
            $this->baseUrl = $payPoint . '/';
        }

        $this->recursiveArrayObjectUtil = new RecursiveArrayObjectUtil();
        $this->signUtil = new SignUtil();


    }

    public function sign(array $params)
    {
        return $this->signUtil->getSign($params, $this->merchantSecret);
    }

    public function verify(array $params)
    {
        $sign = $params['sign'];
        unset($params['sign']);
        return $this->signUtil->getSign($params, $this->merchantSecret) == $sign ? true : false;
    }


    public function parserRequest(array $data, &$cls, $classMapping = array())
    {
        $request = $this->recursiveArrayObjectUtil->getObjectFromArray($data, $cls, $classMapping);
        return $request;
    }



    public function getSignData(Base $request)
    {
        $data = $this->recursiveArrayObjectUtil->getArrayFromObject($request);
        $data = $this->signUtil->generateSignedParams($data, $this->merchantSecret);
        return $data;
    }

    public function getPayNotifyResponse(array  $post)
    {
        if (!$this->verify($post)) {
            throw  new \Exception("签名签名错误");
        }
        /** @var  $payNotifyResponse  PayResponse */
        $payNotifyResponse = new PayResponse();
        $payNotifyResponse = $this->parserRequest($post, $payNotifyResponse);
        return $payNotifyResponse;
    }


    private function handle($request, BaseResponse $response, $classMapping = array())
    {
        if ($request instanceof BaseRequest) {
            $data = $this->recursiveArrayObjectUtil->getArrayFromObject($request);
        } else {
            $data = $request;
        }
        $data = $this->signUtil->generateSignedParams($data, $this->merchantSecret);
        $ret = $this->executeRequest($data, $request->getEndPoint());

        if ($ret) {
            $response = $this->recursiveArrayObjectUtil->getObjectFromArray($ret, $response, $classMapping);
        } else {
            $response->setResultCode(1000);
        }
        return $response;
    }


    public function executeRequest($data, $endPoint)
    {


        $url = $this->baseUrl . $endPoint;
        $headers = array(
            'Content-Type' => 'application/json',
        );
        Request::timeout(10); // 10s
        Request::jsonOpts(true, 512, JSON_NUMERIC_CHECK & JSON_FORCE_OBJECT & JSON_UNESCAPED_SLASHES);
        $response = Request::post($url, $headers, json_encode($data));
        if ($response->code == 200 || $response->code == 201) {
            return $response->body;
        }
        return false;
    }

    public function prePay(PayRequest $request) {

        $payResponse = new PayResponse();
        return $this->handle($request, $payResponse);
    }


    public function closePay(PayCloseRequest $request)
    {
        $payCloseResponse = new PayCloseResponse();
        return $this->handle($request, $payCloseResponse);
    }


    public function refund(RefundRequest $request)
    {
        $refundResponse = new RefundResponse();
        return $this->handle($request, $refundResponse);
    }


    public function notifyPay(array $data)
    {
        $payNotifyResponse = new PayNotifyResponse();
        return $this->handle($data, $payNotifyResponse);
    }

    public function notifyRefund(array $data)
    {
        $refundNotifyResponse = new RefundNotifyResponse();
        return $this->handle($data, $refundNotifyResponse);
    }




}