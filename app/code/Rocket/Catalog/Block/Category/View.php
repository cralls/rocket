<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Rocket\Catalog\Block\Category;

use Magento\Catalog\Api\CategoryAttributeRepositoryInterface;
use Magento\Catalog\Model\ResourceModel\Category as CategoryResourceModel;

/**
 * Class View
 * @api
 * @package Magento\Catalog\Block\Category
 * @since 100.0.2
 */
class View extends \Magento\Catalog\Block\Category\View
{
    protected $categoryAttributeRepository;
    protected $categoryResourceModel;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Model\Layer\Resolver $layerResolver,
        \Magento\Framework\Registry $registry,
        \Magento\Catalog\Helper\Category $categoryHelper,
        CategoryAttributeRepositoryInterface $categoryAttributeRepository,
        CategoryResourceModel $categoryResourceModel,
        array $data = []
    )
    {
        $this->categoryAttributeRepository = $categoryAttributeRepository;
        $this->categoryResourceModel = $categoryResourceModel;
        parent::__construct($context, $layerResolver, $registry, $categoryHelper, $data);
    }

    public function getShoppingEndDates()
    {
        /** @var \Magento\Catalog\Model\Category $category */
        $category = $this->getCurrentCategory();
        $customAttribute = $this->categoryAttributeRepository->get('custom_attribute');
        $attributeRawValue = $this->categoryResourceModel->getAttributeRawValue(
            $category->getId(),
            $customAttribute->getAttributeId(),
            $category->getStoreId()
        );
        if (empty($attributeRawValue)) {
            return [];
        }
        $dates = explode(',', $attributeRawValue);
        $storeCloses = trim($dates[0]);
        $estShipping = trim($dates[1]);
        return ['storeCloses' => $storeCloses, 'estShipping' => $estShipping];
    }
}