<?php
require '../model/messagerie_priver.php';
require '../traitement/messagerie_priver.php';
class Manager{
public function messagerie($donnee){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
      $bdd=new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
    $req=$bdd->prepare('INSERT into messagerie (nom, prenom, email, message, date) VALUES(:nom, :prenom, :email, :message, :date)');
    $req->execute(array('nom'=>$donnee->getnom(), 'prenom'=>$donnee->getprenom(), 'email'=>$donnee->getemail(), 'message'=>$donnee->getmessage(), 'date'=>$donnee->getdate()));
    $req->fetchall();
          if($req == true) {
            header("location: ../View/messagerie_priver.php?msg=1'");
          } else {
             header("location: ../View/messagerie_priver.php?msg=2'");
          }
        }
      }
//echo '<body onLoad="alert(\'Erreur\')">';//
//echo '<meta http-equiv="refresh" content="0;URL=../View/contact.php">';//
?>
