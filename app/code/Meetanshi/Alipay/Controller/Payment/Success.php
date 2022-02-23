<?php
namespace Meetanshi\Alipay\Controller\Payment;

use Meetanshi\Alipay\Controller\Payment as AlipayPayment;
use Magento\Sales\Model\Order;

class Success extends AlipayPayment
{
    public function execute()
    {
        $verify_result = $this->helper->verifyReturn();
        $params = $this->request->getParams();
        if ($verify_result) {
            if ($params['trade_status'] == 'TRADE_FINISHED' || $params['trade_status'] == 'TRADE_SUCCESS') {
                $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
                $orderIncrementId = $objectManager->create('\Magento\Sales\Model\ResourceModel\Order\Collection')->getLastItem()->getIncrementId();
                $order = $this->orderFactory->create()->loadByIncrementId($orderIncrementId);
                $payment = $order->getPayment();
                $tranid = mt_rand(1, 999999);
                $payment->setTransactionId($tranid);
                $payment->setLastTransId($tranid);
                $payment->setAdditionalInformation('sign', $params['sign']);
                $payment->setAdditionalInformation('trade_no', $params['trade_no']);
                $payment->setAdditionalInformation('sign_type', $params['sign_type']);
                $payment->setAdditionalInformation('out_trade_no', $params['out_trade_no']);
                $payment->setAdditionalInformation('trade_status', $params['trade_status']);
                $payment->setAdditionalInformation((array)$payment->getAdditionalInformation());

                $trans = $this->transactionBuilder;
                $transaction = $trans->setPayment($payment)->setOrder($order)->setTransactionId($tranid)->setAdditionalInformation((array)$payment->getAdditionalInformation())->setFailSafe(true)->build(\Magento\Sales\Model\Order\Payment\Transaction::TYPE_CAPTURE);

                $payment->setParentTransactionId(null);

                $payment->save();

                $objectManager->create('\Magento\Sales\Model\OrderNotifier')->notify($order);

                $order->addStatusHistoryComment(__('Transaction is approved by the bank'), Order::STATE_PROCESSING)->setIsCustomerNotified(true);

                $order->save();
                $transaction->save();
                $this->_redirect('checkout/onepage/success');
            } else {
                print_r("trade_status=" . $params['trade_status']);
            }
        } else {
            print_r("验证失败");
        }
    }
}
