<?php
session_start(); //Récupere les données de la session //
require '../model/connexion.php'; // récupére les données de la page //
require '../traitement/connexion.php'; //récupére les données de la page //
class Manager{
public function connexion($donnee){ //function connexion //

      //Code permettant de ce connecter a la BDD et d'enregistrer les données //
      $bdd=new PDO('mysql:host=localhost;dbname=ecole;charset=utf8', 'root', '');
    $req=$bdd->prepare('SELECT * from compte where email = :email and mdp = :mdp');
    $req->execute(array('email'=>$donnee->getemail(), 'mdp'=>md5($donnee->getmdp())));
    $a = $req->fetch();
  if ($a == true){ // début du si //
    $_SESSION['email'] = $donnee->getemail();
    $_SESSION['role'] = $a['role'];
    $_SESSION['ville'] = $a['ville'];
    $_SESSION['id'] = $a['id'];
    $_SESSION['nom'] = $a['nom'];
      $_SESSION['prenom'] = $a['prenom'];
      $_SESSION['tel'] = $a['tel'];
    header("location: ../index.php?msg=1'"); // redirection vers ... //

  }// fin  du si //
  else{ //début du si non //
    header("location: ../View/connexion.php?msg=2'"); // redirection vers la page .... //
  }// fin du si non //
    //header("Location: index.php");
    //$_SESSION['email']=$this->_email;
}



}

?>
