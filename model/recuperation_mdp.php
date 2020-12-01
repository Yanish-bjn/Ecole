<?php
class  mot_de_passe_oublie{ // classe contact reprenant les informations du manager, formulaire, model//
  private $code;
  private $mdp;

  // Le constructeur //
  public function __construct($code, $mdp){

      $this->setcode($code);
      $this->setmdp($mdp);

}
// Début des setteur  //
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
// Fin des setteur  //

// Début des getteur//
public function getcode(){
  return $this->code;
}
public function getmdp(){
  return $this->mdp;
}
// Fin des getteur//

}

?>
