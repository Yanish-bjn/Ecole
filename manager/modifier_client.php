<?php
session_start();
// envoie les données vers les page suiavntes //
require '../model/modifier_client.php';
require '../traitement/modifier_client.php';
class Manager{
public function modifier($donnee){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
      $bdd=new PDO('mysql:host=localhost;dbname=ecole;charset=utf8', 'root', '');
    $req=$bdd->prepare('UPDATE compte SET nom =:nom, prenom =:prenom, email =:email, tel =:tel, mdp =:mdp, role= :role WHERE id = :id');
//var_dump($req);
//    $req->execute(array('nom'=>$donnee->getnom(), 'prenom'=>$donnee->getprenom(), 'email'=>$donnee->getemail(), 'tel'=>$donnee->gettel(), 'mdp'=>md5($donnee->getmdp()), 'id'=>7));
    $req->execute(array('nom'=>$donnee->getnom(), 'prenom'=>$donnee->getprenom(), 'email'=>$donnee->getemail(), 'tel'=>$donnee->gettel(), 'mdp'=>md5($donnee->getmdp()), 'role'=>'client', 'id' =>$donnee->getid()));

      //var_dump($_SESSION);
    $req->fetchall();
    //var_dump($a);
    if ($req == true){
      header("location: ../View/moncompte_client.php");
    }   // Si la requete ne s'execute pas alors on redirige vers une autre page//
    else{
      echo '<body onLoad="alert(\'Erreur\')">';
    echo '<meta http-equiv="refresh" content="0;URL=../View/modifier_client.php">';
    }

          }
}
?>
