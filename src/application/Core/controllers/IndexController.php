<?php 

/**
 * 
 * Controller par défaut de l'application
 * 
 * @category	App1
 * @package		Core
 * 
 */

class IndexController extends Zend_Controller_Action{
	public function indexAction(){
		$articlesMapper = new Core_Model_Mapper_Articles();
		$this->view->articles = $articlesMapper->findAll();
		
		$auteursMapper = new Core_Model_Mapper_Auteurs();
		$this->view->auteurs = $auteursMapper->findAll();
		
	}
	
	public function testAction(){
	
	}
}