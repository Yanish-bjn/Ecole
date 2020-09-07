<?php

class Contact {

	private $nom;
	private $date;
  private $heure;

  public function __construct($nom, $date, $heure) {
  	$this->setNom($nom);
  	$this->setDate($date);
    $this->setHeure($heure);
  }

  public function getNom(){return $this->nom;}
  public function getDate(){return $this->date;}
  public function getHeure(){return $this->heure;}

  public function setNom($nom){
  	$this->nom=$nom;
  }

  public function setDate($date){
  	$this->date=$date;
  }
  public function setHeure($heure){
  	$this->heure=$heure;
  }

}

 ?>
