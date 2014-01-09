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
		$affichageArticlesMapper = new Core_Model_Mapper_AffichageArticles();
		$this->view->affichageArticles = $affichageArticlesMapper->findAll();
		
		$auteursMapper = new Core_Model_Mapper_Auteurs();
		$this->view->auteurs = $auteursMapper->findAll();
		
	}
	
	public function testAction(){
	
	}
}