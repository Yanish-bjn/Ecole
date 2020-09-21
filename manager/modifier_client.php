<?php
session_start();
// envoie les données vers les page suiavntes //
require '../model/modifier_client.php';
require '../traitement/modifier_client.php';
class Manager{
public function modifier($donnee){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
      $bdd=new PDO('mysql:host=localhost;dbname=ecole;charset=utf8', 'root', '');
    $req=$bdd->prepare('UPDATE compte SET nom = :nom, prenom = :prenom, email = :email, tel = :tel, mdp = :mdp WHERE id = :id');
//var_dump($req);
//    $req->execute(array('nom'=>$donnee->getnom(), 'prenom'=>$donnee->getprenom(), 'email'=>$donnee->getemail(), 'tel'=>$donnee->gettel(), 'mdp'=>md5($donnee->getmdp()), 'id'=>7));
    $req->execute(array('nom'=>"test",
    'prenom'=>"demo",
    'email'=>"test@test.te",
    'tel'=>"0123456789",
    'mdp'=>md5("demo"),
    'id'=>7));
var_dump($req);
      //var_dump($_SESSION);
    $a= $req->fetch();
    //var_dump($a);
    if ($a == true){
      //header("location: ../View/moncompte_client.php");
    }
    else{
      echo '<body onLoad="alert(\'Erreur\')">';
    echo '<meta http-equiv="refresh" content="0;URL=../View/modifier_client.php">';
    }

          }
}
?>
