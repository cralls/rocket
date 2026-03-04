<?php
namespace Rss\CustomDesigns\Controller\Adminhtml\Patterns;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\App\ResourceConnection;

class Save extends Action
{
    const ADMIN_RESOURCE = 'Rss_CustomDesigns::custom_designs';

    protected $jsonFactory;
    protected $resource;

    public function __construct(
        Action\Context $context,
        JsonFactory $jsonFactory,
        ResourceConnection $resource
    ) {
        parent::__construct($context);
        $this->jsonFactory = $jsonFactory;
        $this->resource    = $resource;
    }

    public function execute()
    {
        $result = $this->jsonFactory->create();

        $items = $this->getRequest()->getParam('items', []);

        if (!count($items)) {
            return $result->setData([
                'error' => true,
                'message' => __('No data to save.')
            ]);
        }

        $connection = $this->resource->getConnection();
        $table = $this->resource->getTableName('rss_custom_designs_patterns');

        try {

            foreach ($items as $patternId => $data) {

                unset($data['pattern_id']);
                unset($data['updated_at']);
                unset($data['created_at']);

                $connection->update(
                    $table,
                    $data,
                    ['pattern_id = ?' => $patternId]
                );
            }

        } catch (\Exception $e) {

            return $result->setData([
                'error' => true,
                'message' => $e->getMessage()
            ]);
        }

        return $result->setData([
            'error' => false,
            'message' => __('Saved successfully.')
        ]);
    }
}
