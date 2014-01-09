<?php 

class Core_Model_Mapper_Articles{
	public function find($id){
		
		$dbTable = new Core_Model_DbTable_Articles();
		$rowset = $dbTable->find($id);
		// Retourne l'élément courant du tableau
		$row = $rowset->current();
		
		$articles = new Core_Model_Articles();
		$articles->setId($row->articles_id);
		$articles->setTitre($row->articles_titre);
		$articles->setContenu($row->articles_contenu);
		$articles->setDate($row->articles_date);
		$articles->setAuteur($row->articles_auteur);
		
		return $articles;
	}

	
	public function findAll(){
	
		$dbTable = new Core_Model_DbTable_Articles();
		$row = $dbTable->fetchAll($dbTable->select()->order(array('articles_id desc'))->limit(5));
		$rowArray = $row->toArray(); 

		return $rowArray;
	}
	/*
	public function fetchLast($count){
		$dbTable = new Core_Model_DbTable_Articles();
		$rowset = $dbTable->fetchAll(null, array('article_id DESC'), $count);
		
		if (0 === $rowset->count()){
			return false
		}
		
		$articles = array();
		foreach ($rowset as $row){
			$article = new Core_Model_Articles();
			$article->setArticleId($row->article_id)
					->setArticleTitle($row->article_title)
					->setArticleContent($row->article_content);
			
			$authorRow = $row->findParentRow('Core_Model_DbTable_Author');
			$author = new Core_Model_Author();
			$author->setAuthorId($authorRow->author_id)
					->setAuhorName($authorRow->author_name);
			
			$article->setAuthor($author);
			$articles[] = $ article;
		}
	}*/
}