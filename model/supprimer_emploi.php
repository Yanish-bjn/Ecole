<?php
class supprimer_emploi { // Casse inscription provenant du model et du manager //
  private $id;

  // Le constructeur //
  public function __construct($id){

      $this->setid($id);

}
// Début des setteur  //
  public function setpiece($id){
    if(empty($id)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_piece = $id;
  }
  // Fin des setteur  //

  // Début des getteur
  public function getid(){
    return $this->_id;
  }
  // Fin des getteur//
}
?>
