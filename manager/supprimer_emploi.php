<?php
// envoie les données vers les page suiavntes //

$id = $_GET['id'];

require '../model/supprimer_evenement.php';
require '../traitement/Supprimer_evenement.php';
class Manager{
public function supprimer_evenement($donnee){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
      $bdd=new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','yanish', 'root');
    $req=$bdd->prepare('DELETE FROM emploi WHERE id = :id');
    $req->execute(array('id'=>$donnee->getid()));
    $req->fetchall();
    // Si la requete s'execute alors on redirige vers une page//
    if ($req == true){
      header("location: ../View/offre_emploi.php?msg=4'");
    }   // Si la requete ne s'execute pas alors on redirige vers une autre page//
    else{
      header("location: ../View/offre_emploi.php?msg=2'");

    }
  }
}

?>
