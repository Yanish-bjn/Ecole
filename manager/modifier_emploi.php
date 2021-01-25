<?php
session_start();
// envoie les données vers les page suiavntes //
require '../model/modifier_emploi.php';
require '../traitement/modifier_emploi.php';
class Manager{
public function modifier_emploi($donnee){

if(isset($_FILES['piece']))
{
  $file_name = $_FILES['piece']['name'];
  $file_extension = strrchr($file_name, ".");

  $file_tmp_name = $_FILES['piece']['tmp_name'];
  $file_dest = '../fiche/'.$file_name;

  $extensions_autorisees = array('.pdf', '.PDF','.DOC', '.DOCX', '.doc', '.docx' );
  var_dump($file_dest);
  //Enregistre les données dans la BDD et rédireige en fonction du résultat //
        $bdd=new PDO('mysql:host=localhost;dbname=ecole;charset=utf8', 'yanish', 'root');
      $req=$bdd->prepare('UPDATE emploi SET nom_entreprise = :nom_entreprise, adresse = :adresse, rue = :rue, email = :email, date = :date, piece = :piece WHERE id = :id');
  //var_dump($req);
  //    $req->execute(array('nom'=>$donnee->getnom(), 'prenom'=>$donnee->getprenom(), 'email'=>$donnee->getemail(), 'tel'=>$donnee->gettel(), 'mdp'=>md5($donnee->getmdp()), 'id'=>7));
      $req->execute(array('nom_entreprise'=>$donnee->getnom_entreprise(), 'adresse'=>$donnee->getadresse(), 'rue'=>$donnee->getrue(), 'email'=>$donnee->getemail(), 'date'=>$donnee->getdate(), 'piece'=>$file_dest, 'id' =>$donnee->getid()));
        //var_dump($_SESSION);
      $req->fetchall();
      //var_dump($a);
      if ($req == true){
        header("location: ../View/offre_emploi.php?msg=3'");
      }   // Si la requete ne s'execute pas alors on redirige vers une autre page//
      else{
        header("location: ../View/modifier_emploi.php?msg=2'");
      }
// Si la requete s'execute alors on redirige vers une page//
  if(in_array($file_extension, $extensions_autorisees)){
    if(move_uploaded_file($file_tmp_name, $file_dest)){
      echo 'Fichier envoyer avec succès';
    } else {
      echo 'Une erreur est survenu lors de lenvoie du fichier';
    }
  } else {
    echo 'Seul les fichier PDF et Word sont autorisées';
  }
}

  }
}
?>
