<?php

namespace Meetanshi\Alipay\Controller\Payment;

use Meetanshi\Alipay\Controller\Payment as AlipayPayment;
use Meetanshi\Alipay\Helper\Data;
use Magento\Sales\Model\Order;

class Redirect extends AlipayPayment
{
    public function execute()
    {
        if ($this->getRequest()->isAjax()) {
            $result = $this->jsonFactory->create();
            try {
                $order = $this->checkoutSession->getLastRealOrder();
                $order->setState(Order::STATE_PENDING_PAYMENT, true);
                $order->setStatus(Order::STATE_PENDING_PAYMENT);
                $order->save();
                $secretKey = $this->helper->genSecretKey();
                $payment = $order->getPayment();
                $html = $this->helper->getPaymentForm($order, $secretKey);
                $payment->setAdditionalInformation(Data::SECRET_KEY, $secretKey);
                $payment->setAdditionalInformation(Data::HTML_DATA, $html);
                $html = $order->getPayment()->getAdditionalInformation(Data::HTML_DATA);
                return $result->setData(['error' => false, 'success' => true, 'html' => $html]);
            } catch (\Exception $e) {
                return $result->setData(['error' => true, 'success' => false, 'message' => __('Payment exception')]);
            }
        }
        return false;
    }

    private function uuid()
    {
        $data = openssl_random_pseudo_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0010
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
}
