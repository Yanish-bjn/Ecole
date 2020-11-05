<?php
class supprimer_client { // classe connexion reprenant les information du manager, formulaire, model//
  private $_id;

  public function __construct($id){

      $this->setid($id);
}

public function setid($id){
  if(empty($id)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre en caractere');
    return; // retourne le résultat //
  }
  $this->_id = $id;
}

public function getid(){
  return $this->_id;
}
}
?>
