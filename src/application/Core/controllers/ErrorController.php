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
	
	//Pseudo constructeur, appelle le constructeur parent
	public function init(){
		//Une aide permet d'acceder à un objet
		$this->_helper->layout()->setLayout('error');
	
	}
	
	public function errorAction(){
		$errorHandler = $this->_getParam('error_handler');
		$this->view->exception = $errorHandler->exception;
		
		// fc = front controller
		$fc = Zend_Controller_Front::getInstance();
		$log = $fc->getParam('bootstrap')->getResource('log');
		$log->crit($errorHandler->exception->getMessage());
	}
}