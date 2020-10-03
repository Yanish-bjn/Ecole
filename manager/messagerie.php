<?php
// utilisation de service //
session_start();

// envoie les données vers les page suiavntes //
require '../model/messagerie.php';
require '../traitement/messagerie.php';
class Manager{
public function messagerie($donnee){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
      $bdd=new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
    $req=$bdd->prepare('INSERT into chat (nom, prenom, date, message) VALUES(:nom, :prenom, :date, :message)');
    $req->execute(array('nom'=>$_SESSION['nom'], 'prenom'=>$_SESSION['prenom'], 'date'=>$donnee->getdate(), 'message'=>$donnee->getmessage()));
    $req->fetchall();
    // Si la requete s'execute alors on redirige vers une page//
    if ($req == true){
      header("location: ../View/messagerie.php");
    }   // Si la requete ne s'execute pas alors on redirige vers une autre page//
    else{
      echo '<body onLoad="alert(\'Erreur\')">';
    echo '<meta http-equiv="refresh" content="0;URL=../View/messagerie.php">';
    }
  }

}

?>
