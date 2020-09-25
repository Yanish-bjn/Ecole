<?php
class supprimer_client { // classe connexion reprenant les information du manager, formulaire, model//
  private $_nom;

  public function __construct($nom){

      $this->setnom($nom);
}

public function setnom($nom){
  if(empty($nom)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre en caractere');
    return; // retourne le résultat //
  }
  $this->_nom = $nom;
}

public function getnom(){
  return $this->_nom;
}
}
?>
