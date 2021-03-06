<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_Shopbybrand
 * @copyright   Copyright (c) 2016 Mageplaza (http://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */
namespace Mageplaza\Shopbybrand\Model\Import\Behavior;

/**
 * Class Brand
 * @package Mageplaza\Shopbybrand\Model\Import\Behavior
 */
class Brand extends \Magento\ImportExport\Model\Source\Import\AbstractBehavior
{
	/**
	 * {@inheritdoc}
	 */
	public function toArray()
	{
		return [
			\Magento\ImportExport\Model\Import::BEHAVIOR_APPEND  => __('Add/Update'),
			\Magento\ImportExport\Model\Import::BEHAVIOR_DELETE  => __('Delete')
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getCode()
	{
		return 'brand';
	}

	/**
	 * {@inheritdoc}
	 */
	public function getNotes($entityCode)
	{
		$messages = ['mageplaza_brand' => [
			\Magento\ImportExport\Model\Import::BEHAVIOR_APPEND  => __("Note: Please select the brand attribute in Mageplaza_Shopbybrand configuration first."),
			\Magento\ImportExport\Model\Import::BEHAVIOR_DELETE  => __("Note: Please select the brand attribute in Mageplaza_Shopbybrand configuration first."),
		]];

		return isset($messages[$entityCode]) ? $messages[$entityCode] : [];
	}
}
