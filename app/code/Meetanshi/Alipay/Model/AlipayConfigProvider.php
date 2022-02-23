<?php

namespace Meetanshi\Alipay\Model;

use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Payment\Helper\Data as PaymentHelper;
use Magento\Store\Model\StoreManagerInterface;
use Meetanshi\Alipay\Helper\Data as AlipayHelper;

class AlipayConfigProvider implements ConfigProviderInterface
{
    protected $config;
    protected $storeManager;

    protected $methodCodes = ['alipay'];
    protected $methods = [];

    public function __construct(AlipayHelper $config, PaymentHelper $paymentHelper, StoreManagerInterface $storeManager)
    {
        $this->config = $config;
        $this->storeManager = $storeManager;
        foreach ($this->methodCodes as $code) {
            $this->methods[$code] = $paymentHelper->getMethodInstance($code);
        }
    }

    public function getConfig()
    {
        $redirectUrl = $this->storeManager->getStore()->getBaseUrl() . 'alipay/payment/redirect';

        $config = [];
        $config['payment']['alipay_payment']['is_active'] = $this->config->isActive();
        $config['payment']['alipay_payment']['payment_instruction'] = trim($this->config->getPaymentInstructions());
        $config['payment']['alipay_payment']['redirect_url'] = $redirectUrl;

        return $config;
    }
}
