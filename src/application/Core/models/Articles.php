<?php 

class Core_Model_Articles{
	private $id;
	private $titre;
	private $contenu;
	private $date;
	private $auteur;
	/**
	 * @param field_type $date
	 */
	public function setDate($date) {
		$this->date = $date;
		return $this;
	}

	/**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return the $titre
	 */
	public function getTitre() {
		return $this->titre;
	}

	/**
	 * @return the $contenu
	 */
	public function getContenu() {
		return $this->contenu;
	}

	/**
	 * @return the $date
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * @return the $auteur
	 */
	public function getAuteur() {
		return $this->auteur;
	}

	/**
	 * @param field_type $id
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * @param field_type $titre
	 */
	public function setTitre($titre) {
		$this->titre = $titre;
		return $this;
	}

	/**
	 * @param field_type $contenu
	 */
	public function setContenu($contenu) {
		$this->contenu = $contenu;
		return $this;
	}

	/**
	 * @param field_type $auteur
	 */
	public function setAuteur($auteur) {
		$this->auteur = $auteur;
		return $this;
	}
	
	/*
	 	public function setAuteur( Core_Model_Auteur $auteur) {
		$this->auteur = $auteur;
		retun $this;
	} 
	 */
	
}