<?php
class messagerie { // Casse inscription provenant du model et du manager //

  private $date;
  private $message;


  public function __construct($date, $message){


      $this->setdate($date);
      $this->setmessage($message);
}



  public function setdate($date){
    if(empty($date)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_date = $date;
  }
  public function setmessage($message){
    if(empty($message)){ // si la valeur saisie est vide afficher une erreur //
      trigger_error('la variable doit etre un caractere');
      return; // retourne le résultat //
    }
    $this->_message = $message;
  }


  public function getdate(){
    return $this->_date;
  }
  public function getMessage(){
    return $this->_message;
  }

}
?>
