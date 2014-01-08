<?php 

/**
 * 
 * Controller d'erreur de l'application
 * 
 * @category	App1
 * @package		Core
 * 
 */

class ErrorController extends Zend_Controller_Action{
	
	public function errorAction(){
		$errorHandler = $this->_getParam('error_handler');
		$this->view->exception = $errorHandler->exception;
	}
}