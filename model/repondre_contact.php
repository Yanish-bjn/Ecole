<?php
class repondre_contact { // classe contact reprenant les informations du manager, formulaire, model//
  private $nom;
  private $email;
	private $sujet;
  private $message;
  private $date;

  public function __construct($nom, $email, $sujet, $message, $date){

      $this->setnom($nom);
      $this->setemail($email);
			$this->setsujet($sujet);
      $this->setmessage($message);
      $this->setdate($date);
}

public function setnom($nom){
  if(empty($nom)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_nom = $nom;
}
public function setemail($email){
  if(empty($email)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_email = $email;
}

public function setsujet($sujet){
  if(empty($sujet)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_sujet = $sujet;
}

public function setmessage($message){
  if(empty($message)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_message = $message;
}

public function setdate($date){
  if(empty($date)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_date = $date;
}

public function getnom(){
  return $this->_nom;
}
public function getemail(){
  return $this->_email;
}
public function getsujet(){
  return $this->_sujet;
}
public function getmessage(){
  return $this->_message;

}
public function getdate(){
  return $this->_date;
}

}

?>
