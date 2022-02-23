<?php

namespace Meetanshi\Alipay\Controller;

use Magento\Checkout\Helper\Data as CheckoutHelper;
use Magento\Checkout\Model\Session as CheckoutSession;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Request\Http;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\DB\TransactionFactory;
use Magento\Payment\Helper\Data as PaymentHelper;
use Magento\Sales\Model\Order\Email\Sender\InvoiceSender;
use Magento\Sales\Model\Order\Email\Sender\OrderSender;
use Magento\Sales\Model\Order\Payment\Transaction\Builder;
use Magento\Sales\Model\OrderFactory;
use Magento\Store\Model\StoreManagerInterface;
use Meetanshi\Alipay\Helper\Data as AlipayHelper;

abstract class Payment extends Action
{
    protected $customerSession;
    protected $checkoutSession;
    protected $resultJsonFactory;
    protected $orderFactory;
    protected $storeManager;
    protected $alipayPayment;
    protected $jsonFactory;
    protected $config;
    protected $logger;
    protected $invoiceSender;
    protected $transactionFactory;
    protected $transactionBuilder;
    protected $request;
    protected $helper;

    public function __construct(Context $context, PaymentHelper $paymentHelper, OrderFactory $orderFactory, CheckoutSession $checkoutSession, CheckoutHelper $checkoutData, JsonFactory $resultJsonFactory, OrderSender $orderSender, StoreManagerInterface $storeManager, InvoiceSender $invoiceSender, TransactionFactory $transactionFactory, Http $request, Builder $transactionBuilder, AlipayHelper $helper, $params = [])
    {
        $this->checkoutSession = $checkoutSession;
        $this->orderFactory = $orderFactory;
        $this->orderSender = $orderSender;
        $this->alipayPayment = $paymentHelper->getMethodInstance('alipay');
        $this->jsonFactory = $resultJsonFactory;
        $this->storeManager = $storeManager;
        $this->request = $request;
        $this->transactionBuilder = $transactionBuilder;
        $this->helper = $helper;
        $this->transactionFactory = $transactionFactory;
        parent::__construct($context);
    }
}
