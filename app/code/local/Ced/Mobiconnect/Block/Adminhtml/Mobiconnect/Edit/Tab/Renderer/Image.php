<?php
/**
 * CedCommerce
  *
  * NOTICE OF LICENSE
  *
  * This source file is subject to the End User License Agreement (EULA)
  * that is bundled with this package in the file LICENSE.txt.
  * It is also available through the world-wide-web at this URL:
  * http://cedcommerce.com/license-agreement.txt
  *
  * @category  Ced
  * @package   Ced_Mobiconnect
  * @author    CedCommerce Core Team <connect@cedcommerce.com >
  * @copyright Copyright CEDCOMMERCE (http://cedcommerce.com/)
  * @license      http://cedcommerce.com/license-agreement.txt
  */
class Ced_Mobiconnect_Block_Adminhtml_Mobiconnect_Edit_Tab_Renderer_Image extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
	public function render(Varien_Object $row)
	{
		return $this->_getValue($row);
	}
	protected function _getValue(Varien_Object $row)
	{
		$val = $row->getData($this->getColumn()->getIndex());
		$val = str_replace("no_selection", "", $val);
		$url = Mage::getBaseUrl('media') . 'Banners/images/' . $val;
		$out = "<img src=". $url ." width='100px'/>";
		return $out;
		
		
	}
}
?>