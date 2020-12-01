<?php
class connexion { // classe connexion reprenant les information du manager, formulaire, model//
  private $email;
  private $mdp;
  private $role;

  // Le constructeur //
  public function __construct($email, $mdp, $role){

      $this->setemail($email);
      $this->setmdp($mdp);
      $this->setrole($role);
}
// Début des setteur  //
public function setemail($email){
  if(empty($email)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_email = $email;
}
public function setmdp($mdp){
  if(empty($mdp)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_mdp = $mdp;
}
public function setrole($role){
  if(empty($role)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_role = $role;
}
// Findes setteur  //

// Début des getteur//
public function getemail(){
  return $this->_email;
}
public function getmdp(){
  return $this->_mdp;
}
public function getrole(){
  return $this->_role;
}
// Fin des getteur//

}
?>
