<?php
class mot_de_passe { // classe contact reprenant les informations du manager, formulaire, model//
  private $email;

  // Le constructeur //
  public function __construct($email){

      $this->setemail($email);
}
// Début des setteur  //

public function setemail($email){
  if(empty($email)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->email = $email;
}
// Fin des setteur  //

// Début des getteur//
public function getemail(){
  return $this->email;
}
// Fin des getteur//

}

?>
