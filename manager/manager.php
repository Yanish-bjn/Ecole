<?php

class Manager {

  public function Inscription($insc){
    $bdd = new PDO('mysql:host=localhost;dbname=ecole;charset=utf8','root','');
    $r = $bdd->prepare('INSERT INTO inscription (nom, prenom, age, mdp) VALUES (:nom, :prenom, :age, :mdp)');
    $r->execute(array(
      'nom' => $insc->getNom(),
      'prenom' => $insc->getPrenom(),
      'age' => $insc->getAge(),
      'mdp' => $insc->getMdp()
    ));
  }


public function Connexion($con){
     $bdd = new PDO('mysql:host=localhost;dbname=cinema_site;charset=utf8','root','');
     $r = $bdd->prepare('SELECT * FROM inscription WHERE nom = :nom AND mdp = :mdp');
     $r -> execute(array(
       'nom' => $con->getNom(),
       'mdp' => $con->getMdp()
     ));
    $donne=$r->fetch();

    if ($donne['nom'] == $con->getNom() && $donne['mdp'] == $con->getMdp()) {
      $_SESSION['id'] = $donne['id'];
      $_SESSION['nom'] = $donne['nom'];
      $_SESSION['prenom'] = $donne['prenom'];
      $_SESSION['age'] = $donne['age'];
      $_SESSION['mdp'] = $donne['mdp'];
      if ($_SESSION['id'] == 10){
        header('location: ../accueiladmin.php');
      }
      else {
      header('location: ../form/indexconnexion.php');
      }
    }
    else {
      echo 'erreur';
    }

 }

 public function Contact($con){
    $bdd = new PDO('mysql:host=localhost;dbname=cinema_site;charset=utf8','root','');
    $r = $bdd->prepare('INSERT INTO contact (msg, nom, prenom) VALUES (:message, :nom, :prenom)');
    $r->execute(array(
      'msg' => $con->getMsg(),
      'nom' => $con->getNom(),
      'prenom' => $con->getPrenom()
    ));
 }

 public function modification_nom($modn){
        $bdd = new PDO('mysql:host=localhost; dbname=cinema_site; charset=utf8', 'root','');
        $id = $_SESSION['id'];
        $nom = $modn->getNom();

        $req = $bdd->prepare('UPDATE inscription SET nom=:nom WHERE id=:id');
        $req->execute(array(
            'nom'=>$modn->getNom(),
            'id'=>$id
        ));
    }

 public function modification_prenom($modp){
        $bdd = new PDO('mysql:host=localhost; dbname=cinema_site; charset=utf8', 'root','');
        $id = $_SESSION['id'];
        $prenom = $modp->getPrenom();

        $req = $bdd->prepare('UPDATE inscription SET prenom=:prenom WHERE id=:id');
        $req->execute(array(
            'prenom'=>$modp->getPrenom(),
            'id'=>$id
        ));
    }

    public function modification_age($moda){
           $bdd = new PDO('mysql:host=localhost; dbname=cinema_site; charset=utf8', 'root','');
           $id = $_SESSION['id'];
           $age = $moda->getAge();

           $req = $bdd->prepare('UPDATE inscription SET age=:age WHERE id=:id');
           $req->execute(array(
               'age'=>$moda->getAge(),
               'id'=>$id
           ));
       }

       public function modification_mdp($modm){
              $bdd = new PDO('mysql:host=localhost; dbname=cinema_site; charset=utf8', 'root','');
              $id = $_SESSION['id'];
              $mdp = $modm->getMdp();

              $req = $bdd->prepare('UPDATE inscription SET mdp=:mdp WHERE id=:id');
              $req->execute(array(
                  'mdp'=>$modm->getMdp(),
                  'id'=>$id
              ));
          }



}

 ?>
