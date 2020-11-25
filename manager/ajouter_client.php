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
htmlspecialchars($_POST['nom'], ENT_QUOTES, 'UTF-8');

class Manager{
public function ajouter_client($donnee){

//Enregistre les données dans la BDD et rédireige en fonction du résultat //
      $bdd=new PDO('mysql:host=localhost;dbname=ecole;charset=utf8', 'root', '');//Connexion à la BDD//
    $req=$bdd->prepare('INSERT into compte (nom, prenom, email, ville, tel, mdp, role) VALUES(:nom, :prenom, :email, :ville, :tel, :mdp, :role)');//Preparation de la raquete SQL//
    $req->execute(array('nom'=>$donnee->getnom(),
                        'prenom'=>$donnee->getprenom(),
                        'email'=>$donnee->getemail(),
                        'ville'=>$donnee->getville(),
                        'tel'=>$donnee->gettel(),
                        'mdp'=>md5($donnee->getmdp()),
                        'role'=>$donnee->getrole()));//On execute le tableau//
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
          $mail->CharSet = "utf-8";
          $mail->Subject = 'Demande d\'ajout de client';
          $mail->setFrom('yanishverif@gmail.com', 'Lycée Robert Schuman');
          $mail->addAddress($donnee->getemail(), 'Bienvenue');     // Add a recipient //Recipients
           $mail->Body    =   "Bonjour et bienvenu sur le site du lycée robert schuman, Vous avez été inscrit par l'admin !! :)";
          if(!$mail->Send()) {
            header("location: ../View/ajouter_client.php?msg=2'");
          } else {
             header("location: ../View/moncompte_admin.php?msg=3'");
          }

              }

}
//echo '<body onLoad="alert(\'Erreur\')">';//
//echo '<meta http-equiv="refresh" content="0;URL=../View/contact.php">';//
?>
