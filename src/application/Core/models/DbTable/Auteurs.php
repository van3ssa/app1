<?php 

class Core_Model_DbTable_Auteurs extends Zend_Db_Table_Abstract{
	
	// On renseigne le nom de la table et la clef primaire dans des variables.
	protected $_name = 'auteurs';
	protected $_primary = 'auteurs_id';
	
	/*
	 protected $_dependentTable = array(‘Core_Model_DbTable_Articles’);
	 */
	
}