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

$email = $_POST['email'];
$message = $_POST['message'];

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
          $mail->addAddress($email, 'Bienvenue');     // Add a recipient //Recipients
           $mail->Body    =   $message;
          if(!$mail->Send()) {
            header("location: ../View/contact_admin.php?msg=2'");
          } else {
             header("location: ../View/contact_admin.php?msg=1'");
          }




//echo '<body onLoad="alert(\'Erreur\')">';//
//echo '<meta http-equiv="refresh" content="0;URL=../View/contact.php">';//
?>
