<?php
class  mot_de_passe_oublie{ // classe contact reprenant les informations du manager, formulaire, model//
  private $mdp;
  private $email;

  public function __construct($mdp, $email){

      $this->setmessage($mdp);
      $this->setemail($email);

}

public function setmessage($mdp){
  if(empty($mdp)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('Erreur le mot de passe ne peut pas être vide');
    return; // retourne le résultat //
  }
  $this->mdp = $mdp;
}

public function setemail($email){
  if(empty($email)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('Erreur le mail ne peut pas être vide');
    return; // retourne le résultat //
  }
  $this->email = $email;
}

public function getmdp(){
  return $this->mdp;
}

public function getemail(){
  return $this->email;
}
}

?>
