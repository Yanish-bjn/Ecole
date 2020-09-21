<?php
session_start();
$email= $_POST['email'];
//Utilisation de service //
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Récuperation de données des page suivantes //
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/autoload.php';
//

// envoie les données vers les page suiavntes //
require '../Model/mot_de_passe.php';
require '../Traitement/passe.php';
class Manager{
public function mot_de_passe($donnee){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
      $bdd=new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
    $req=$bdd->prepare('SELECT * FROM compte WHERE email=:email');
    $req->execute(array('email'=>$donnee->getemail()));

  }
// Envoie des données à l'adresse mail //
  public function Mail($donnee){
  $mail = new PHPMailer();
  $mail->isSMTP();                                            // Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
  $mail->Username   = 'yanishverif@gmail.com';                     // SMTP username
  $mail->Password   = 'Yanish93210';                               // SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
  $mail->Port       = 587;                                    // TCP port to connect to

  //Recipients
  $mail->setFrom('yanishverif@gmail.com', 'Mot de passe');
  $mail->addAddress($donnee->getemail(), 'Mot de passe');     // Add a recipient //Recipients
   $mail->Body    = "<a href='http://localhost/GitHub/Ecole/View/recuperation_mdp.php'>Réinitialiser mot de passe</a>";
;
// Si l'envoie de mail s'effectue alors on redirige vers une page //
  if(!$mail->Send()) {
    echo '<body onLoad="alert(\'Erreur\')">';
  echo '<meta http-equiv="refresh" content="0;URL=../View/contact.php">';
} else { // Si l'envoie de mail ne s'effectue pas alors on redirige vers une autre page //
     header("location: ../index.php");
  }

      }
}
 ?>
