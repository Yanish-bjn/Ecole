<?php
// envoie les données vers les page suiavntes //
require '../model/ajouter_evenement.php';
require '../traitement/ajouter_evenement.php';
class Manager{
public function evenement($donnee){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
      $bdd=new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root',''); //Connexion à la base de donnée //
    $req=$bdd->prepare('INSERT into evenement (nom_personne, nom_evenement, date, description) VALUES(:nom_personne, :nom_evenement, :date, :description)');//Preparation de la requete //
    $req->execute(array('nom_personne'=>$donnee->getnom_personne(), 'nom_evenement'=>$donnee->getnom_evenement(), 'date'=>$donnee->getdate(), 'description'=>$donnee->getdescription())); //Execution du tableau //
    $req->fetchall();
    // Si la requete s'execute alors on redirige vers une page//
    if ($req ==true){
      header("location: ../View/evenement_admin.php");
    }   // Sinon on redirige vers une autre page//
    else{
      echo '<body onLoad="alert(\'Erreur\')">';
    echo '<meta http-equiv="refresh" content="0;URL=../View/ajouter_evenement.php">';
    }
  }
}

?>
