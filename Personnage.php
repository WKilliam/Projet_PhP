<?php


class Personnage{

	private $nom ;
	private $prenom;
	private $dateNaissance;
	private $sexe;
	private $mail;
	private $adresse;




	public function __construct($Nom,$Prenom,$DateNaissance,$Sexe,$Mail,$Adresse){

		$this->nom=$Nom;
		$this->prenom=$Prenom;
		$this->dateNaissance=$DateNaissance;
		$this->sexe=$Sexe;
		$this->mail=$Mail;
		$this->adresse=$Adresse;
		
	}

	public function checkMailValue(){
		$tab=explode(' ',$mail); 
		return $tab[0];
	}

	public function getNom(){
		return $this->nom;
	}
	public function getPrenom(){
		return $this->prenom;
	}
	public function getDateNaissance(){
		return $this->dateNaissance;
	}
	public function getSexe(){
		return $this->sexe;
	}
	public function getMail(){
		return $this->mail;
	}
	public function getAdresse(){
		return $this->adresse;
	}
	
}
?>