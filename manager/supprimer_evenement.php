<?php
// envoie les données vers les page suiavntes //

require '../model/supprimer_evenement.php';
require '../traitement/Supprimer_evenement.php';
class Manager{
public function supprimer_evenement($donnee){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
      $bdd=new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
    $req=$bdd->prepare('DELETE FROM evenement WHERE nom_evenement = :nom_evenement');
    $req->execute(array('nom_evenement'=>$donnee->getnom_evenement()));
    $req->fetchall();
    // Si la requete s'execute alors on redirige vers une page//
    if ($req ==true){
      header("location: ../View/evenement_admin.php");
    }   // Si la requete ne s'execute pas alors on redirige vers une autre page//
    else{
      echo '<body onLoad="alert(\'Erreur\')">';
    echo '<meta http-equiv="refresh" content="0;URL=../View/supprimer_evenement.php">';
    }
  }
}

?>
