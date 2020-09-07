<?php

class Contact {

	private $nom;
	private $email;
  private $sujet;
	private $message;

public function __construct($nom, $email, $sujet, $message){
	$this->setNom($nom);
  $this->setEmail($email);
	$this->setSujet($sujet);
	$this->setMessage($message);
}

public function getNom(){return $this->nom;}
public function getEmail(){return $this->email;}
public function getSujet(){return $this->sujet;}
public function getMessage(){return $this->message;}

public function setNom($nom){
  $this->nom = $nom;
}
public function setEmail($email){
	$this->email = $email;
}
public function setSujet($sujet){
	$this->sujet=$sujet;
}
public function setMessage($message){
	$this->message=$message;
}


}
 ?>
