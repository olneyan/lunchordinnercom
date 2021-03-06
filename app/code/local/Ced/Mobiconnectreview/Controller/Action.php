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
  * @package   Ced_Mobiconnectreview
  * @author    CedCommerce Core Team <connect@cedcommerce.com >
  * @copyright Copyright CEDCOMMERCE (http://cedcommerce.com/)
  * @license      http://cedcommerce.com/license-agreement.txt
  */
abstract class Ced_Mobiconnectreview_Controller_Action extends Ced_Mobiconnect_Controller_Action {
	protected $_data;
	public function preDispatch() {
		parent::preDispatch ();
		$enable = ( int ) Mage::getStoreConfig ( 'mobiconnectreview/mobireview/activation' );
		if (! $enable) {
			echo 'Mobiconnectreview was disabled!';
			header ( "HTTP/1.0 503" );
			exit ();
		}
	}
}