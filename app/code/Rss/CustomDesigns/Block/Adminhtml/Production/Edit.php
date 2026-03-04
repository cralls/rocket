<?php
namespace Rss\CustomDesigns\Block\Adminhtml\Production;

use Magento\Backend\Block\Template;
use Magento\Framework\Registry;

class Edit extends Template
{
    protected $registry;

    public function __construct(
        Template\Context $context,
        Registry $registry,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->registry = $registry;
    }

    public function getModel()
    {
        return $this->registry->registry('rss_production_request');
    }
}
