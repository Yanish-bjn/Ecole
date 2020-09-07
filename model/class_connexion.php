<?php

class Connexion {
	private $nom;
	private $mdp;

public function __construct($nom, $mdp) {
	$this->setNom($nom);
	$this->setMdp($mdp);
}

public function getNom(){return $this->nom;}
public function getMdp(){return $this->mdp;}


public function setNom($nom){
	$this->nom=$nom;
}

public function setMdp($mdp){
	$this->mdp=$mdp;
}
}
 ?>
