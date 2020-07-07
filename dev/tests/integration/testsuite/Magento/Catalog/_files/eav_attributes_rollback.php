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

    $attribute1 = $eavRepository->get($installer->getEntityTypeId('catalog_product'), 'text_attribute');
    $attribute2 = $eavRepository->get($installer->getEntityTypeId('catalog_product'), 'multiselect_attribute');
    $attribute3 = $eavRepository->get($installer->getEntityTypeId('catalog_product'), 'text_area_attribute');
    $attribute4 = $eavRepository->get($installer->getEntityTypeId('catalog_product'), 'text_editor_attribute');
    $attribute5 = $eavRepository->get($installer->getEntityTypeId('catalog_product'), 'boolean_attribute');
    var_dump("LINE 2000");
    $eavRepository->delete($attribute1);
    $eavRepository->delete($attribute2);
    $eavRepository->delete($attribute3);
    $eavRepository->delete($attribute4);
    $eavRepository->delete($attribute5);
} catch (\Exception $ex) {
    //Nothing to remove
}
