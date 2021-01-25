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
       $bdd=new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','yanish', 'root');
     $req=$bdd->prepare('SELECT * FROM compte WHERE email=:email');
     $req->execute(array('email'=>$donnee->getemail()));
     if($req == true){
       $a = $_POST['email'];
       var_dump($a);
       $code = "";
       for ($i=0; $i < 8; $i++) {
         $code .= mt_rand(0,9);
       }
       $bdd=new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','yanish', 'root');
       $reqe=$bdd->prepare('INSERT INTO recuperation (email, code) VALUES(:email, :code)');
       $reqe->execute(array('email'=>$donnee->getemail(), 'code'=>$code));
       if($reqe == true){

         $mail = new PHPMailer();
         $mail->isSMTP();                                            // Send using SMTP
         $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
         $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
         $mail->Username   = 'yanishverif@gmail.com';                     // SMTP username
         $mail->Password   = 'Yanish93210';                               // SMTP password
         $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
         $mail->Port       = 587;                                    // TCP port to connect to

         //Recipients

         $url = "http://localhost/Github/Ecole/View/recuperation_mdp.php?code=$code";
         $mail->CharSet = "utf-8";
         $mail->Subject = 'Récuperation mot de passe';
         $mail->setFrom('yanishverif@gmail.com', 'Lycée Robert  Schuman');
         $mail->addAddress($donnee->getemail(), 'Mot de passe');     // Add a recipient //Recipients
         $mail->Body    = "Bonjour, voici le lien pour la réinitialisation : $url";
         if(!$mail->Send()) {// Si l'envoie de mail ne s'execute alors on redirige vers une page//
           header("location: ../View/connexion.php?msg=2'");
         } else {
           header("location: ../View/connexion.php?msg=3'");
         }// Sinon l'envoie de mail s'execute alors on redirige vers une page//
       }
       else{
         echo"erreur insertion";
       }
     }
     else{
       echo'Erreur';
     }
   }

 }
  ?>
