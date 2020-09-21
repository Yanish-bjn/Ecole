<?php
class supprimer_evenement { // classe connexion reprenant les information du manager, formulaire, model//
  private $_nom_evenement;

  public function __construct($nom_evenement){

      $this->setnom_evenement($nom_evenement);
}

public function setnom_evenement($nom_evenement){
  if(empty($nom_evenement)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un entier');
    return; // retourne le résultat //
  }
  $this->_nom_evenement = $nom_evenement;
}

public function getnom_evenement(){
  return $this->_nom_evenement;
}
}
?>
