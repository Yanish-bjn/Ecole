<?php
class supprimer_emploi { // Casse inscription provenant du model et du manager //
  private $id;


  public function __construct($id){

      $this->setid($id);

}

  public function setpiece($id){
    if(empty($id)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_piece = $id;
  }

  public function getid(){
    return $this->_id;
  }
}
?>
