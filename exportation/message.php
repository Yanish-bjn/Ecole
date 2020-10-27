<?php

try{
  $dbco = new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
  $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT * FROM chat";
  $sth = $dbco->prepare($sql);
  $sth->execute();

  $newReservations = $sth->fetchAll();

  $excel = "";
  $excel .=  "ID\tNom\tPersonne\tDate et heure\tMessage\n";

  foreach($newReservations as $row) {
      $excel .= "$row[id]\t$row[nom]\t$row[prenom]\t$row[date]\t$row[message]\n";
  }

  header("Content-type: application/vnd.ms-excel");
  header("Content-disposition: attachment; filename=liste-message.xls");

  print $excel;
  exit;

           }

           catch(PDOException $e){
               echo "Erreur : " . $e->getMessage();
           }

?>