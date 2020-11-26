<?php
class  mot_de_passe_oublie{ // classe contact reprenant les informations du manager, formulaire, model//
  private $code;
  private $mdp;

  public function __construct($code, $mdp){

      $this->setcode($code);
      $this->setmdp($mdp);

}

public function setcode($code){
  if(empty($code)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('Erreur le mot de passe ne peut pas être vide');
    return; // retourne le résultat //
  }
  $this->code = $code;
}

public function setmdp($mdp){
  if(empty($mdp)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('Erreur le mot de passe ne peut pas être vide');
    return; // retourne le résultat //
  }
  $this->mdp = $mdp;
}

public function getcode(){
  return $this->code;
}
public function getmdp(){
  return $this->mdp;
}

}

?>
