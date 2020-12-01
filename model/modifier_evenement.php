<?php
class modifier_evenement { // classe connexion reprenant les information du manager, formulaire, model//
  private $_nom_evenement;
  private $_nom_personne;
  private $_date;
  private $_description;
  private $_id;

  // Le constructeur //
  public function __construct($nom_evenement, $nom_personne, $date, $description, $id){

      $this->setnom_evenement($nom_evenement);
      $this->setnom_personne($nom_personne);
      $this->setdate($date);
      $this->setdescription($description);
      $this->setid($id);

}
// Début des setteur  //
public function setnom_evenement($nom_evenement){
  if(empty($nom_evenement)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_nom_evenement = $nom_evenement;
}
public function setnom_personne($nom_personne){
  if(empty($nom_personne)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_nom_personne = $nom_personne;
}
public function setdate($date){
  if(empty($date)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_date = $date;
}
public function setdescription($description){
  if(empty($description)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_description = $description;
}
public function setid($id){
  if(empty($id)){ // si la valeur saisie est vide afficher une erreur //
    trigger_error('la variable doit etre un caractere');
    return; // retourne le résultat //
  }
  $this->_id = $id;
}
// Fin des setteur  //

// Début des getteur//
public function getnom_evenement(){
  return $this->_nom_evenement;
}
public function getnom_personne(){
  return $this->_nom_personne;
}
public function getdate(){
  return $this->_date;
}
public function getdescription(){
  return $this->_description;
}
public function getid(){
  return $this->_id;
}
// Fin des getteur//
}
?>
