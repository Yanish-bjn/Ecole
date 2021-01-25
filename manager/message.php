<?php
// utilisation de service //
session_start();

try{
$dbco = new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','yanish', 'root');
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "DELETE FROM chat";
$sth = $dbco->prepare($sql);
$sth->execute();

$count = $sth->rowCount();
  if ($sth == true){
    header("location: ../View/messagerie_admin.php?msg=3'");
  }   // Si la requete ne s'execute pas alors on redirige vers une autre page//
  else{
    header("location: ../View/messagerie_admin.php?msg=2'");

  }

           }

           catch(PDOException $e){
               echo "Erreur : " . $e->getMessage();
           }

?>
