<?php
require_once Mage::getModuleDir('controllers', 'Mage_Customer') . DS . 'AccountController.php';

/**
 * Customer account controller Extended
 */
class Aztech_DisableRegistration_AccountController extends Mage_Customer_AccountController
{
	/**
	  * Extended - createAction
	**/
	public function createAction() {
		if (Mage::getStoreConfig('aztech_section/registration_page/disable_registration_option')) {
			$this->_forward('defaultNoRoute');
		} else {
			parent::createAction();
		}
	}

	/**
	  * Extended - createPostAction
	**/
	public function createPostAction()
	{
		if (Mage::getStoreConfig('aztech_section/registration_page/disable_registration_option')) {
			$url = $this->_getUrl('*/*/create', array('_secure' => true));
			$this->_redirectError($url);
		} else {
			parent::createPostAction();
		}
	}

	/**
	  * Extended - confirmationAction
	**/
	public function confirmationAction()
	{
		if (Mage::getStoreConfig('aztech_section/registration_page/disable_registration_option')) {
			$url = $this->_getUrl('*/*/create', array('_secure' => true));
			$this->_redirectError($url);
		} else {
			parent::confirmationAction();
		}
	}

	/**
	  * Extended - confirmAction
	**/
	public function confirmAction()
	{
		if (Mage::getStoreConfig('aztech_section/registration_page/disable_registration_option')) {
			$url = $this->_getUrl('*/*/create', array('_secure' => true));
			$this->_redirectError($url);
		} else {
			parent::confirmAction();
		}
	}
}
