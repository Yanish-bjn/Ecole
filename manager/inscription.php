<?php
// envoie les données vers les page suiavntes //
require '../model/inscription.php';
require '../traitement/inscription.php';

class Manager{
public function inscription($donnee){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
      $bdd=new PDO('mysql:host=localhost;dbname=ecole;charset=utf8', 'root', '');
    $req=$bdd->prepare('INSERT into compte (nom, prenom, email, tel, mdp, role) VALUES(:nom, :prenom, :email, :tel, :mdp, :role)');
    $req->execute(array('nom'=>$donnee->getnom(), 'prenom'=>$donnee->getprenom(), 'email'=>$donnee->getemail(), 'tel'=>$donnee->gettel(), 'mdp'=>md5($donnee->getmdp()), 'role'=>'user'));
    $req->fetch();
    if ($req == true){
      header("location: ../View/connexion.php");
    }
    else{
      header("location: ../View/inscription.php");
    }

          }
}
//echo '<body onLoad="alert(\'Erreur\')">';//
//echo '<meta http-equiv="refresh" content="0;URL=../View/contact.php">';//
?>
