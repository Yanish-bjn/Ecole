<?php
class supprimer_contact { // Casse inscription provenant du model et du manager //
  private $id;


  public function __construct($id){

      $this->setid($id);

}

  public function setid($id){
    if(empty($id)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_id = $id;
  }

  public function getid(){
    return $this->_id;
  }
}
?>
