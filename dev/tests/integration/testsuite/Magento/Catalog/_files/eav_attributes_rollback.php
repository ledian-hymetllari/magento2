<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

$objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();

/** @var \Magento\Catalog\Setup\CategorySetup $installer */
$installer = $objectManager->create(\Magento\Catalog\Setup\CategorySetup::class);

/** @var \Magento\Eav\Api\AttributeRepositoryInterface $eavRepository */
$eavRepository = $objectManager->get(\Magento\Eav\Api\AttributeRepositoryInterface::class);

try {

    $attribute1 = $eavRepository->get($installer->getEntityTypeId('catalog_product'), 'color_custom');
    $attribute2 = $eavRepository->get($installer->getEntityTypeId('catalog_product'), 'is_featured_custom');
    var_dump("LINE 2000");
    $eavRepository->delete($attribute1);
    $eavRepository->delete($attribute2);
} catch (\Exception $ex) {
    //Nothing to remove
}
