<?php

namespace Meetanshi\Alipay\Helper;

use Magento\Framework\App\Helper\Context;
use Magento\Framework\Encryption\EncryptorInterface;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\App\Request\Http;

class Data extends AbstractHelper
{
    const SECRET_KEY_NAME = "mage_key";
    const REFUND_SERVICE = "forex_refund";
    const SECRET_KEY = "secret_key";
    const OUT_TRADE_NO = "trade_no";
    const HTML_DATA = "html";

    protected $directoryList;
    protected $storeManager;
    protected $request;
    protected $encryptor;

    private $parameter;
    private $signType = 'MD5';
    private $inputCharset = 'utf-8';
    private $cacert;
    private $service = "create_forex_trade";
    private $outTradeNo;
    private $subject;
    private $total;
    private $currency;

    public function __construct(Context $context, EncryptorInterface $encryptor, DirectoryList $directoryList, StoreManagerInterface $storeManager, Http $request)
    {
        parent::__construct($context);
        $this->encryptor = $encryptor;
        $this->cacert = getcwd() . "/app/code/Meetanshi/Alipay" . '\\cacert.pem';
        $this->directoryList = $directoryList;
        $this->storeManager = $storeManager;
        $this->request = $request;
    }

    public function isActive()
    {
        return $this->scopeConfig->getValue('payment/alipay/active', ScopeInterface::SCOPE_STORE);
    }

    public function getPaymentInstructions()
    {
        return $this->scopeConfig->getValue('payment/alipay/instructions', ScopeInterface::SCOPE_STORE);
    }

    public function isPaymentAvailable()
    {
        $partnerkey = trim($this->getPartnerKey());
        $partnerid = trim($this->getPartnerId());
        $url = trim($this->getApiEndpoint());
        if ((!$partnerkey) | (!$partnerid) | (!$url)) {
            return false;
        }
        return true;
    }

    public function getPartnerKey()
    {
        return $this->encryptor->decrypt($this->scopeConfig->getValue('payment/alipay/partner_secret', ScopeInterface::SCOPE_STORE));
    }

    public function getPartnerId()
    {
        return $this->encryptor->decrypt($this->scopeConfig->getValue('payment/alipay/partner_id', ScopeInterface::SCOPE_STORE));
    }

    public function getApiEndpoint()
    {
        $endpoint = $this->scopeConfig->getValue('payment/alipay/testmode', ScopeInterface::SCOPE_STORE);
        if ($endpoint) {
            return trim($this->scopeConfig->getValue('payment/alipay/endpoint_test', ScopeInterface::SCOPE_STORE));
        } else {
            return trim($this->scopeConfig->getValue('payment/alipay/endpoint_production', ScopeInterface::SCOPE_STORE));
        }
    }

    public function getPaymentForm($order, $secretKey)
    {
        $this->outTradeNo = $order->getIncrementId() . "_" . $this->generateToken();
        $this->subject = $this->getPaymentSubject();
        $this->total = $order->getBaseGrandTotal();
        $this->currency = $order->getBaseCurrencyCode();
        $notifyUrl = $this->getNotifyUrl();
        $notifyUrl .= self::SECRET_KEY_NAME . "=$secretKey";
        $this->parameter = ["service" => $this->getService(),"product_code" => 'NEW_OVERSEAS_SELLER', "partner" => $this->getPartnerId(), "notify_url" => $notifyUrl, "return_url" => $this->getReturnUrl(), "out_trade_no" => $this->outTradeNo, "subject" => $this->subject, "total_fee" => number_format($this->total, 2), "currency" => $this->currency, "_input_charset" => trim(strtolower($this->getInputCharset()))];

        return $this->buildAlipayRequestForm($this->parameter, "get", "确认");
    }

    public function generateToken()
    {
        $seed = crc32(uniqid(sha1(microtime(true) . getmypid()), true));
        mt_srand($seed);
        $n = mt_rand(1, 200);
        for ($i = 0; $i < $n; $i++) {
            $token = mt_rand();
        }

        return $token;
    }

    public function getPaymentSubject()
    {
        $subject = trim($this->scopeConfig->getValue('general/store_information/name', ScopeInterface::SCOPE_STORE));
        if (!$subject) {
            return "Magento 2 order";
        }

        return $subject;
    }

    public function getNotifyUrl()
    {
        $baseUrl = $this->storeManager->getStore()->getBaseUrl();
        return $baseUrl . "alipay/payment/notify?";
    }

    public function getService()
    {
        return $this->service;
    }

    public function getReturnUrl()
    {
        $baseUrl = $this->storeManager->getStore()->getBaseUrl();
        return $baseUrl . "alipay/payment/success";
    }

    public function getInputCharset()
    {
        return $this->inputCharset;
    }

    public function buildAlipayRequestForm($para_temp, $method, $button_name)
    {
        $this->alipay_gateway = $this->getApiEndpoint();

        $para = $this->buildAlipayRequestPara($para_temp);

        $sHtml = "<form id='alipaysubmit' name='alipaysubmit' action='" . $this->alipay_gateway . "_input_charset=" . trim(strtolower($this->getInputCharset())) . "' method='" . $method . "'>";
        foreach ($para as $key => $val) {
            $sHtml .= "<input type='hidden' name='" . $key . "' value='" . $val . "'/>";
        }

        $sHtml = $sHtml . "<input type='submit'  value='" . $button_name . "' style='display:none;'></form>";

        return $sHtml;
    }

    public function buildAlipayRequestPara($para_temp)
    {

        $para_filter = $this->paraFilter($para_temp);

        $para_sort = $this->argSort($para_filter);

        $mysign = $this->buildRequestMysign($para_sort);

        $para_sort['sign'] = $mysign;
        $para_sort['sign_type'] = strtoupper(trim($this->getSignType()));

        return $para_sort;
    }

    public function paraFilter($para)
    {
        $para_filter = [];
        foreach ($para as $key => $val) {
            if ($key == "sign" || $key == "sign_type" || $val == "") {
                continue;
            } else {
                $para_filter[$key] = $para[$key];
            }
        }
        return $para_filter;
    }

    public function argSort($para)
    {
        ksort($para);
        reset($para);
        return $para;
    }

    public function buildRequestMysign($para_sort)
    {
        $prestr = $this->createLinkstring($para_sort);

        $mysign = "";
        switch (strtoupper(trim($this->getSignType()))) {
            case "MD5":
                $mysign = $this->md5Sign($prestr, $this->getPartnerKey());
                break;
            default:
                $mysign = "";
        }

        return $mysign;
    }

    public function createLinkstring($para)
    {
        $arg = '';
        foreach ($para as $key => $val) {
            $arg .= $key . "=" . $val . "&";
        }
        //去掉最后一个&字符
        if($arg) {
            $arg = substr($arg, 0, -1);
        }

        //如果存在转义字符，那么去掉转义
        if (get_magic_quotes_gpc()) {
            $arg = stripslashes($arg);
        }

        return $arg;
    }

    public function getSignType()
    {
        return $this->signType;
    }

    public function md5Sign($prestr, $key)
    {
        $prestr = $prestr . $key;

        return md5($prestr);
    }

    public function getRefundAlipayForm($order, $amount)
    {
        $payment = $order->getPayment();
        $outTradeNo = $payment->getParentTransactionId();
        $data = $payment->getAdditionalInformation();
        $currency = $order->getBaseCurrencyCode();
        $outReturnNo = $outTradeNo . $this->generateToken();
        $parameter = ["service" => self::REFUND_SERVICE, "partner" => $this->getPartnerId(), "out_trade_no" => $data['out_trade_no'], "out_return_no" => $outReturnNo, "return_amount" => $amount, "_input_charset" => "UTF-8", "reason" => "Magento2RefundOrder" . $order->getIncrementId(), "gmt_return" => date("Ymdhis"), 'currency' => $currency];

        $para = $this->buildAlipayRequestPara($parameter);

        return $para;
    }

    public function buildRequestLink($parameter)
    {
        $url = $this->getApiEndpoint();
        foreach ($parameter as $k => $v) {
            $url .= $k . "=" . $v . "&";
        }

        return $url;
    }

    public function genSecretKey($orderNum = "")
    {
        $secretWordConfig = $this->generateRandomString(10);
        $secretWord = time() . $orderNum . $secretWordConfig;

        return md5($secretWord);
    }

    public function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }

    public function verifyReturn()
    {
        $params = $this->request->getParams();
        if (empty($params)) {
            return false;
        } else {
            $isSign = $this->getSignVeryfy($params, $params["sign"]);
            return $isSign;
        }
    }

    public function getSignVeryfy($para_temp, $sign)
    {
        $para_filter = $this->paraFilter($para_temp);

        $para_sort = $this->argSort($para_filter);

        $prestr = $this->createLinkstring($para_sort);

        $isSgin = false;
        switch (strtoupper(trim($this->getSignType()))) {
            case "MD5":
                $isSgin = $this->md5Verify($prestr, $sign, $this->getPartnerKey());
                break;
            default:
                $isSgin = false;
        }

        return $isSgin;
    }

    public function md5Verify($prestr, $sign, $key)
    {
        $prestr = $prestr . $key;
        $mysgin = md5($prestr);

        if ($mysgin == $sign) {
            return true;
        } else {
            return false;
        }
    }
}
