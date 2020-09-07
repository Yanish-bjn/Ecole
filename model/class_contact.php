<?php

class Contact {
	private $msg;
	private $nom;
  private $prenom;


public function __construct($msg, $nom, $prenom) {
	$this->setMsg($msg);
  $this->setNom($nom);
	$this->setPrenom($prenom);
}

public function getMsg(){return $this->msg;}
public function getNom(){return $this->nom;}
public function getPrenom(){return $this->prenom;}


public function setMsg($msg){
  $this->msg=$msg;
}
public function setNom($nom){
	$this->nom=$nom;
}
public function setPrenom($prenom){
	$this->prenom=$prenom;
}


}
 ?>
