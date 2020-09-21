<?php
class modifier { // Casse inscription provenant du model et du manager //
  private $_nom;
  private $_prenom;
  private $_email;
  private $_tel;
  private $_mdp;


  public function __construct($nom, $prenom, $email, $tel, $mdp){

      $this->setNom($nom);
      $this->setprenom($prenom);
      $this->setemail($email);
      $this->settel($tel);
      $this->setmdp($mdp);
}

  public function setnom($nom){
    if(empty($nom)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_nom = $nom;
  }

  public function setprenom($prenom){
    if(empty($prenom)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_prenom = $prenom;
  }

  public function setemail($email){
    if(empty($email)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_email = $email;
  }
  public function settel($tel){
    if(empty($tel)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_tel = $tel;
  }

  public function setmdp($mdp){
    if(empty($mdp)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_mdp = $mdp;
  }

  public function getnom(){
    return $this->_nom;
  }
  public function getprenom(){
    return $this->_prenom;
  }
  public function getemail(){
    return $this->_email;
  }
  public function gettel(){
    return $this->_tel;
  }
  public function getmdp(){
    return $this->_mdp;
  }
}
?>
