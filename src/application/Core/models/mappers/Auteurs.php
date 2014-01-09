<?php 

class Core_Model_Mapper_Auteurs{
	public function findAll(){
		
	
		$dbTable = new Core_Model_DbTable_Auteurs();
		$row = $dbTable->fetchAll($dbTable->select());
		$rowArray = $row->toArray(); 

		return $rowArray;
	}

}