<?php
var_dump($_POST);
var_dump($_FILES);
// envoie les données vers les page suiavntes //
require '../model/ajouter_emploi.php';
require '../traitement/ajouter_emploi.php';
class Manager{
public function ajouter_emploi($donnee){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
if(isset($_FILES['piece']))
{
  $file_name = $_FILES['piece']['name'];
  $file_extension = strrchr($file_name, ".");

  $file_tmp_name = $_FILES['piece']['tmp_name'];
  $file_dest = '../fiche/'.$file_name;

  $extensions_autorisees = array('.pdf', '.PDF','.DOC', '.DOCX', '.doc', '.docx' );
  var_dump($file_dest);

  $bdd=new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root',''); //Connexion à la base de donnée //
$req=$bdd->prepare('INSERT INTO emploi (nom_entreprise, adresse, rue, email, date, piece) VALUES(:nom_entreprise, :adresse, :rue, :email, :date, :piece)');//Preparation de la requete //
$req->execute(array('nom_entreprise'=>$donnee->getnom_entreprise(), 'adresse'=>$donnee->getadresse(), 'rue'=>$donnee->getrue(), 'email'=>$donnee->getemail(), 'date'=>$donnee->getdate(), 'piece'=>$file_dest)); //Execution du tableau //
$req->fetchall();
if ($req ==true){
  header("location: ../View/offre_emploi.php?msg=1'");
}   // Sinon on redirige vers une autre page//
else{
  header("location: ../View/offre_emploi.php?msg=2'");

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
