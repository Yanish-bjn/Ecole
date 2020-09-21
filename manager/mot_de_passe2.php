<?php
//Récupération des données //
session_start();
$email= $_POST['email'];
$mdp=md5($_POST['mdp']);
// envoie les données vers les page suiavntes //
require '../Model/recuperation_mdp.php';
require '../Traitement/recuperation_mdp.php';
class Manager{
public function mot_de_passe_oublie($donne){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
      $bdd=new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
    $req = $bdd->prepare('UPDATE compte set mdp = :mdp WHERE email = :email');
    $a = $req->execute(array('mdp'=>md5($donne->getmdp()), 'email'=>$donne->getemail()));

    if ($a == true){// Si la requete s'execute alors on redirige vers une autre page//
      header("location: ../index.php");
    }
    else { // Si la requete ne s'execute pas alors on redirige vers une autre page//
			echo '<body onLoad="alert(\'Erreur\')">';
    }
  }
}
?>
