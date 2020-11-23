<?php
// envoie les données vers les page suiavntes //
require '../model/supprimer_contact.php';
require '../traitement/Supprimer_contact.php';
class supprimer{
public function supprimer_contact($donnee){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
      $bdd=new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
    $req=$bdd->prepare('DELETE FROM contact WHERE id = :id');
    $req->execute(array('id'=>$donnee->getid()));
    $req->fetchall();
    // Si la requete s'execute alors on redirige vers une page//
    if ($req == true){
      header("location: ../View/contact_admin.php?msg=4'");
    }   // Si la requete ne s'execute pas alors on redirige vers une autre page//
    else{
      header("location: ../View/contact_admin.php?msg=2'");

    }
  }
}

?>
