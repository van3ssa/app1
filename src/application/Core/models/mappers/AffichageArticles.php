<?php 

class Core_Model_Mapper_AffichageArticles{
	public function find($id){
		
		$dbTable = new Core_Model_DbTable_AffichageArticles();
		$rowset = $dbTable->find($id);
		// Retourne l'élément courant du tableau
		$row = $rowset->current();
		
		$affichageArticles = new Core_Model_AffichageArticles();
		$affichageArticles->setId($row->articles_id);
		$affichageArticles->setTitre($row->articles_titre);
		$affichageArticles->setContenu($row->articles_contenu);
		$affichageArticles->setDate($row->articles_date);
		$affichageArticles->setAuteur($row->articles_auteur);
		
		return $affichageArticles;
	}

	
	public function findAll(){
	
		$dbTable = new Core_Model_DbTable_AffichageArticles();
		$row = $dbTable->fetchAll($dbTable->select()->order(array('articles_id desc'))->limit(5));
		$rowArray = $row->toArray(); 

		return $rowArray;
	}
}