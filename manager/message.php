<?php
// utilisation de service //
session_start();

try{
$dbco = new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "DELETE FROM chat";
$sth = $dbco->prepare($sql);
$sth->execute();

$count = $sth->rowCount();
  if ($sth == true){
    header("location: ../View/messagerie_admin.php");
  }   // Si la requete ne s'execute pas alors on redirige vers une autre page//
  else{
    echo '<body onLoad="alert(\'Erreur\')">';
    echo '<meta http-equiv="refresh" content="0;URL=../View/messagerie.php">';
  }

           }

           catch(PDOException $e){
               echo "Erreur : " . $e->getMessage();
           }

?>
