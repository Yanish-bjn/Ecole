<?php
// envoie les données vers les page suiavntes //

require '../model/supprimer_client.php';
require '../traitement/supprimer_client.php';
class Manager{
public function supprimer_client($donnee){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
      $bdd=new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
    $req=$bdd->prepare('DELETE FROM compte WHERE nom = :nom');
    $req->execute(array('nom'=>$donnee->getnom()));
    $req->fetchall();
    // Si la requete s'execute alors on redirige vers une page//
    if ($req ==true){
      header("location: ../View/moncompte_admin.php");
    }   // Si la requete ne s'execute pas alors on redirige vers une autre page//
    else{
      echo '<body onLoad="alert(\'Erreur\')">';
    echo '<meta http-equiv="refresh" content="0;URL=../View/supprimer_client.php">';
    }
  }
}

?>
