<?php
namespace VNS\Custom\Block;

use Magento\Framework\View\Element\Template;

class CustomShipdate extends Template
{
    public function getOrderCreatedat()
    {
		$shipDate = date('m/d/Y', strtotime("+4 weeks", strtotime($this->getData('order_created_at'))));
		return $shipDate;
    }
}
