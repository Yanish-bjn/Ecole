<?php
// utilisation de service //
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Recuperation de données des page suivantes //
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/autoload.php';
//

// envoie les données vers les page suiavntes //
require '../model/contact.php';
require '../traitement/contact.php';
class Manager{
public function contact($donnee){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
      $bdd=new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
    $req=$bdd->prepare('INSERT into contact (nom, email, sujet, message) VALUES(:nom, :email, :sujet, :message)');
    $req->execute(array('nom'=>$donnee->getnom(), 'email'=>$donnee->getemail(), 'sujet'=>$donnee->getsujet(), 'message'=>$donnee->getmessage()));
    $a=$req->fetchall();
    // Si la requete s'execute alors on redirige vers une page//
    if ($req ==true){
      header("location: ../index.php");
    }   // Si la requete ne s'execute pas alors on redirige vers une autre page//
    else{
      header("location: ../View/contact.php");
    }
  }

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
  $mail->setFrom('yanishverif@gmail.com', 'Nouvelle demande de contact');
  $mail->addAddress($donnee->getemail(), 'Contact');     // Add a recipient //Recipients
   $mail->Body    =   $donnee->getmessage();
  if(!$mail->Send()) {
    echo '<body onLoad="alert(\'Erreur\')">';
  echo '<meta http-equiv="refresh" content="0;URL=../View/contact.php">';
  } else {
     header("location: ../index.php");
  }

      }
}

?>
