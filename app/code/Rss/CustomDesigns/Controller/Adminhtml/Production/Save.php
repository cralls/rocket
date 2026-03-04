<?php
namespace Rss\CustomDesigns\Controller\Adminhtml\Production;

use Magento\Backend\App\Action;
use Rss\CustomDesigns\Model\ProductionRequestFactory;
use Rss\CustomDesigns\Model\ResourceModel\ProductionRequest as ResourceModel;

class Save extends Action
{
    const ADMIN_RESOURCE = 'Rss_CustomDesigns::production_requests';

    protected $factory;
    protected $resource;

    public function __construct(
        Action\Context $context,
        ProductionRequestFactory $factory,
        ResourceModel $resource
    ) {
        parent::__construct($context);
        $this->factory  = $factory;
        $this->resource = $resource;
    }

    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        if (!$data) {
            return $this->_redirect('customdesigns/production/listing');
        }

        $id    = $data['entity_id'] ?? null;
        $model = $this->factory->create();

        if ($id) {
            $this->resource->load($model, $id);
            if (!$model->getId()) {
                $this->messageManager->addErrorMessage(__('This Production Request no longer exists.'));
                return $this->_redirect('customdesigns/production/listing');
            }
        }

        unset($data['form_key'], $data['entity_id']);

        $model->addData($data);

        try {
            $this->resource->save($model);
            $this->messageManager->addSuccessMessage(__('Production Request saved.'));
            return $this->_redirect('customdesigns/production/listing');
            
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
            return $this->_redirectReferer();
        }
    }
}
