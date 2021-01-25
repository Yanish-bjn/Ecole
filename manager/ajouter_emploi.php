<?php
var_dump($_POST);
var_dump($_FILES);
// envoie les données vers les page suiavntes //
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Recuperation de données des page suivantes //
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/autoload.php';

require '../model/ajouter_emploi.php';
require '../traitement/ajouter_emploi.php';
class Manager{
public function ajouter_emploi($donnee){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
if(isset($_FILES['piece']))
{
  $file_name = $_FILES['piece']['name'];
  $file_extension = strrchr($file_name, ".");// Récupere le nom du fichier //

  $file_tmp_name = $_FILES['piece']['tmp_name'];
  $file_dest = '../fiche/'.$file_name; // Récupere la destination du fichier //

  $extensions_autorisees = array('.pdf', '.PDF','.DOC', '.DOCX', '.doc', '.docx' ); // Autorise les format word et pdf //
  var_dump($file_dest);

  $bdd=new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','yanish', 'root'); //Connexion à la base de donnée //
$req=$bdd->prepare('INSERT INTO emploi (nom_entreprise, adresse, rue, email, date, piece) VALUES(:nom_entreprise, :adresse, :rue, :email, :date, :piece)');//Preparation de la requete //
$req->execute(array('nom_entreprise'=>$donnee->getnom_entreprise(), 'adresse'=>$donnee->getadresse(), 'rue'=>$donnee->getrue(), 'email'=>$donnee->getemail(), 'date'=>$donnee->getdate(), 'piece'=>$file_dest)); //Execution du tableau //
$req->fetchall();

$mail = new PHPMailer();
$mail->isSMTP();                                            // Send using SMTP
$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = 'yanishverif@gmail.com';                     // SMTP username
$mail->Password   = 'Yanish93210';                               // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
$mail->Port       = 587;                                    // TCP port to connect to

//Recipients
$mail->CharSet = "utf-8";
$mail->Subject = 'Demande d\'ajout d\'offre d\'emploi';
$mail->setFrom('yanishverif@gmail.com', 'Lycée Robert Schuman');
$mail->addAddress($donnee->getemail(), 'Offre d\'emploi');     // Add a recipient //Recipients
 $mail->Body    =   "Bonjour votre demande d'ajout d'empoi a bien était effectuer merci de votre confiance.";
if(!$mail->Send()) { // Si l'envoie de mail ne s'execute pas alors on redirige vers une page //
  header("location: ../View/offre_emploi.php?msg=2'");
} else {
  header("location: ../View/offre_emploi.php?msg=1'");
}
// Sinon l'envoie de mail s'execute alors on redirige vers une page//


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
