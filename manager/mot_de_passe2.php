<?php
//Récupération des données //
session_start();

// envoie les données vers les page suiavntes //
require '../Model/recuperation_mdp.php';
require '../Traitement/recuperation_mdp.php';
class Manager{
public function mot_de_passe_oublie($donnee){
  if($_POST['mdp'] == $_POST['mdp_confirmer']) {
          if(isset($_POST['mdp']) AND isset($_POST['mdp_confirmer']))
          {
            $bdd=new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
          $req=$bdd->prepare('SELECT email FROM recuperation WHERE code=:code');
          $req->execute(array('code'=>$donnee->getcode()));
          $a  = $req->fetch();

          if($a == true){
            $bdd=new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
            $reqe=$bdd->prepare('UPDATE compte SET mdp = :mdp WHERE email = :email');
            $reqe->execute(array('mdp'=>md5($donnee->getmdp()), 'email'=>$a['email']));
            $reqe->fetchall();
                  if($reqe == true){
                    $bdd=new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
                    $reqee=$bdd->prepare('DELETE from recuperation WHERE email = :email');
                    $reqee->execute(array('email'=>$a['email']));
                    $reqee->fetchall();
                    if($reqee == true){
                    header("location: ../View/connexion.php?msg=5'");
                  }
                  else {
                    header("location: ../View/connexion.php?msg=2'");
                  }
}
          else {
            header("location: ../View/connexion.php?msg=2'");
          }

          } else {
            header("location: ../View/connexion.php?msg=4'");
          }

        }
      }
    }
}
           ?>
