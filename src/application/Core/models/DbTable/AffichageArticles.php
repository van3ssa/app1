<?php 

class Core_Model_DbTable_AffichageArticles extends Zend_Db_Table_Abstract{
	
	// On renseigne le nom de la table et la clef primaire dans des variables.
	protected $_name = 'articles';
	protected $_primary = 'articles_id';
	
}