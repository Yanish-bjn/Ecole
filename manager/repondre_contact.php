<?php
// utilisation de service //
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Recuperation de données des page suivantes //
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/autoload.php';
//
require '../model/supprimer_contact.php';
require '../traitement/Supprimer_contact.php';
class Supprimer{
public function supprimer_contact($donnee){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
      $bdd=new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
    $req=$bdd->prepare('DELETE FROM contact WHERE id = :id');
    $req->execute(array('id'=>$donnee->getid()));
    $req->fetchall();
  }
}

require '../model/repondre_contact.php';
require '../traitement/repondre_contact.php';
class Manager{
public function repondre_contact($donnee){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
      $bdd=new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
    $req=$bdd->prepare('INSERT into contact (nom, email, sujet, message, date, verification) VALUES(:nom, :email, :sujet, :message, :date, :verification)');
    $req->execute(array('nom'=>$donnee->getnom(), 'email'=>$donnee->getemail(), 'sujet'=>$donnee->getsujet(), 'message'=>$donnee->getmessage(), 'date'=>$donnee->getdate(), 'verification'=>'Fait'));
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
          $mail->Subject = 'Réponse demande de contact';
          $mail->setFrom('yanishverif@gmail.com', 'Lycée Robert Schuman');
          $mail->addAddress($donnee->getemail(), 'Réponse');     // Add a recipient //Recipients
           $mail->Body    =   $donnee->getmessage();
          if(!$mail->Send()) {
            header("location: ../View/contact_admin.php?msg=2'");
          } else {
             header("location: ../View/contact_admin.php?msg=1'");
          }
        }
      }
//echo '<body onLoad="alert(\'Erreur\')">';//
//echo '<meta http-equiv="refresh" content="0;URL=../View/contact.php">';//
?>
