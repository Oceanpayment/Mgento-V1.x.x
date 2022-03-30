<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category	Oceanpayment
 * @package 	Oceanpayment_THCash
 */
 
class Oceanpayment_OPTHCash_Model_Source_Invoice
{
    public function toOptionArray()
    {
        return array(
        	array('value' => '0', 'label' => Mage::helper('opthcash')->__('No')),
            array('value' => '1', 'label' => Mage::helper('opthcash')->__('Server Push only')),
        	array('value' => '2', 'label' => Mage::helper('opthcash')->__('Browser Return only')),
        );
    }
}



