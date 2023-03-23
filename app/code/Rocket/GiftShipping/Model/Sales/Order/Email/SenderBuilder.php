<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Rocket\GiftShipping\Model\Sales\Order\Email;

class SenderBuilder
{
    public function send()
    {
        $this->configureEmailTemplate();
        
        $this->transportBuilder->addTo(
            $this->identityContainer->getCustomerEmail(),
            $this->identityContainer->getCustomerName()
            );
        
        // cralls
        /*$vars = $this->templateContainer->getTemplateVars();
        $order = $vars['order'];
        if($order->getShippingEmail() != '') {
            error_log("[".date('Y-m-d H:i:s')."] Email is ".$order->getShippingGift()."\r\n", 3, '/home/rocketsc/public_html/error_log');
            $this->transportBuilder->addTo($order->getShippingEmail());
        }*/
        // end
        
        $copyTo = $this->identityContainer->getEmailCopyTo();
        
        if (!empty($copyTo) && $this->identityContainer->getCopyMethod() == 'bcc') {
            foreach ($copyTo as $email) {
                $this->transportBuilder->addBcc($email);
            }
        }
        
        $transport = $this->transportBuilder->getTransport();
        $transport->sendMessage();
    }
}
