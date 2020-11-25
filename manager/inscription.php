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

// envoie les données vers les page suiavntes //
require '../model/inscription.php';
require '../traitement/inscription.php';

class Manager{
public function inscription($donnee){


          $bdd=new PDO('mysql:host=localhost;dbname=ecole;charset=utf8', 'root', '');
        $req=$bdd->prepare('INSERT into compte (nom, prenom, email, ville, tel, mdp, role) VALUES(:nom, :prenom, :email, :ville, :tel, :mdp, :role)');
        $req->execute(array('nom'=>$donnee->getnom(), 'prenom'=>$donnee->getprenom(), 'email'=>$donnee->getemail(), 'ville'=>$donnee->getville(), 'tel'=>$donnee->gettel(), 'mdp'=>md5($donnee->getmdp()), 'role'=>'client'));
        $req->fetch();

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
          $mail->Subject = 'Demande D\'inscription';
          $mail->setFrom('yanishverif@gmail.com', 'Lycée Robert Schuman');
          $mail->addAddress($donnee->getemail(), 'Bienvenue');     // Add a recipient //Recipients
           $mail->Body    =   "Bienvenue votre demande d'inscription a été approuvé, merci de nous avoir rejoin.)";
          if(!$mail->Send()) {
            header("location: ../View/inscription.php?msg=2'");
          } else {
             header("location: ../View/connexion.php?msg=1'");
          }
}
              }



//echo '<body onLoad="alert(\'Erreur\')">';//
//echo '<meta http-equiv="refresh" content="0;URL=../View/contact.php">';//
?>
