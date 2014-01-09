<?php 

class Core_Model_DbTable_Articles extends Zend_Db_Table_Abstract{
	
	// On renseigne le nom de la table et la clef primaire dans des variables.
	protected $_name = 'articles';
	protected $_primary = 'articles_id';
	/*
	 protected $_referenceMap = array(
	 	'FK_author' => array(
	 		'columns' =>array('auteurs_id'),
	 		'refTableClass' => 'Core_Model_DbTable_Auteurs',
	 		'refColumns' => array('auteurs_id'),
	 		'onDelete' => self::RESTRICT,
	 		'onUpdate' => self::CASCADE
	*/
}