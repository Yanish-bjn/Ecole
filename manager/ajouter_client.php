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
require '../model/ajouter_client.php';
require '../traitement/ajouter_client.php';

class Manager{
public function ajouter_client($donnee){
//Enregistre les données dans la BDD et rédireige en fonction du résultat //
      $bdd=new PDO('mysql:host=localhost;dbname=ecole;charset=utf8', 'root', '');
    $req=$bdd->prepare('INSERT into compte (nom, prenom, email, ville, tel, mdp, role) VALUES(:nom, :prenom, :email, :ville, :tel, :mdp, :role)');
    $req->execute(array('nom'=>$donnee->getnom(), 'prenom'=>$donnee->getprenom(), 'email'=>$donnee->getemail(), 'ville'=>$donnee->getville(),'tel'=>$donnee->gettel(), 'mdp'=>md5($donnee->getmdp()), 'role'=>$donnee->getrole()));
    $req->fetch();
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
          $mail->setFrom('yanishverif@gmail.com', 'Lycée Robert Schuman');
          $mail->addAddress($donnee->getemail(), 'Bienvenue');     // Add a recipient //Recipients
           $mail->Body    =   "Vous avez était inscrit par l'admin !! :)";
          if(!$mail->Send()) {
            echo '<body onLoad="alert(\'Erreur\')">';
          echo '<meta http-equiv="refresh" content="0;URL=../View/ajouter_cient.php">';
          } else {
             header("location: ../View/moncompte_admin.php");
          }

              }

}
//echo '<body onLoad="alert(\'Erreur\')">';//
//echo '<meta http-equiv="refresh" content="0;URL=../View/contact.php">';//
?>
