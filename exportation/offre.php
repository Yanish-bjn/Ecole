<?php


try{
  $dbco = new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
  $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT * FROM emploi";
  $sth = $dbco->prepare($sql);
  $sth->execute();

  $newReservations = $sth->fetchAll();

  $excel = "";
  $excel .=  "ID\tNom de l'entreprise\tAdresse\tRue\tEmail\tDate\tPiece jointe\n";

  foreach($newReservations as $row) {
      $excel .= "$row[id]\t$row[nom_entreprise]\t$row[adresse]\t$row[rue]\t$row[email]\t$row[date]\t$row[piece]\n";
  }

  header("Content-type: application/vnd.ms-excel");
  header("Content-disposition: attachment; filename=liste-offre-emploi.xls");

  print $excel;
  exit;

           }

           catch(PDOException $e){
               echo "Erreur : " . $e->getMessage();
           }

?>
