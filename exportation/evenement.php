<?php

try{
  $dbco = new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
  $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT * FROM evenement";
  $sth = $dbco->prepare($sql);
  $sth->execute();

  $newReservations = $sth->fetchAll();

  $excel = "";
  $excel .=  "ID\tNom de l'evenement\tPersonne\tDate\tDescription\n";

  foreach($newReservations as $row) {
      $excel .= "$row[id]\t$row[nom_evenement]\t$row[nom_personne]\t$row[date]\t$row[description]\n";
  }

  header("Content-type: application/vnd.ms-excel");
  header("Content-disposition: attachment; filename=liste-evenement.xls");

  print $excel;
  exit;

           }

           catch(PDOException $e){
               echo "Erreur : " . $e->getMessage();
           }

?>
