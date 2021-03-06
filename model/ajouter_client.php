<?php
class ajouter_client { // Casse inscription provenant du model et du manager //
  private $nom;
  private $prenom;
  private $email;
  private $ville;
  private $tel;
  private $mdp;
  private $role;

// Le constructeur //
  public function __construct($nom, $prenom, $email, $ville, $tel, $mdp, $role){

      $this->setNom($nom);
      $this->setprenom($prenom);
      $this->setemail($email);
      $this->setville($ville);
      $this->settel($tel);
      $this->setmdp($mdp);
      $this->setrole($role);
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
  // Début des setteur  //
  public function setemail($email){
    if(empty($email)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_email = $email;
  }
  public function setville($ville){
    if(empty($ville)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_ville = $ville;
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
  public function setrole($role){
    if(empty($role)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_role = $role;
  }
  // Fin des setteur  //

  // Début des getteur//
  public function getnom(){
    return $this->_nom;
  }
  public function getprenom(){
    return $this->_prenom;
  }
  public function getemail(){
    return $this->_email;
  }
  public function getville(){
    return $this->_ville;
  }
  public function gettel(){
    return $this->_tel;
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
