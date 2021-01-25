<?php
// utilisation de service //
session_start();

// envoie les données vers les page suiavntes //
require '../model/messagerie.php';
require '../traitement/messagerie.php';
class Manager{
public function messagerie($donnee){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
      $bdd=new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','yanish', 'root');
    $req=$bdd->prepare('INSERT into chat (nom, prenom, date, message) VALUES(:nom, :prenom, :date, :message)');
    $req->execute(array('nom'=>$_SESSION['nom'], 'prenom'=>$_SESSION['prenom'], 'date'=>$donnee->getdate(), 'message'=>$donnee->getmessage()));
    $req->fetchall();
    // Si la requete s'execute alors on redirige vers une page//
    if ($req == true){
      header("location: ../View/messagerie_admin.php?msg=1'");
    }   // Si la requete ne s'execute pas alors on redirige vers une autre page//
    else{
      header("location: ../View/messagerie_admin.php?msg=2'");
    }
  }

}

?>
