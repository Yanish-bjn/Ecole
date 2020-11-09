<?php
class modifier_emploi { // Casse inscription provenant du model et du manager //
  private $nom_entreprise;
  private $adresse;
  private $rue;
  private $email;
  private $date;
  private $id;


  public function __construct($nom_entreprise, $adresse, $rue, $email, $date, $id){

      $this->setnom_entreprise($nom_entreprise);
      $this->setadresse($adresse);
      $this->setrue($rue);
      $this->setemail($email);
      $this->setdate($date);
      $this->setid($id);

}

  public function setnom_entreprise($nom_entreprise){
    if(empty($nom_entreprise)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_nom_entreprise = $nom_entreprise;
  }

  public function setadresse($adresse){
    if(empty($adresse)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_adresse = $adresse;
  }

  public function setrue($rue){
    if(empty($rue)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_rue = $rue;
  }
  public function setemail($email){
    if(empty($email)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_email = $email;
  }
  public function setdate($date){
    if(empty($date)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_date = $date;
  }


  public function setid($id){
    if(empty($id)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_id = $id;
  }

  public function getnom_entreprise(){
    return $this->_nom_entreprise;
  }
  public function getadresse(){
    return $this->_adresse;
  }
  public function getrue(){
    return $this->_rue;
  }
  public function getemail(){
    return $this->_email;
  }
  public function getdate(){
    return $this->_date;
  }
  public function getpiece(){
    return $this->_piece;
  }
  public function getid(){
    return $this->_id;
  }
}
?>
