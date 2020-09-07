<?php

class Inscription {
	private $nom;
	private $prenom;
  private $age;
	private $mdp;

public function __construct($nom, $prenom, $age, $mdp) {
	$this->setNom($nom);
	$this->setPrenom($prenom);
  $this->setAge($age);
	$this->setMdp($mdp);
}

public function getNom(){return $this->nom;}
public function getPrenom(){return $this->prenom;}
public function getAge(){return $this->age;}
public function getMdp(){return $this->mdp;}


public function setNom($nom){
	$this->nom=$nom;
}
public function setPrenom($prenom){
	$this->prenom=$prenom;
}
public function setAge($age){
  $this->age=$age;
}
public function setMdp($mdp){
	$this->mdp=$mdp;
}
}
 ?>
