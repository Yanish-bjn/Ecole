<?php


try{
  $dbco = new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
  $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT * FROM compte";
  $sth = $dbco->prepare($sql);
  $sth->execute();

  $newReservations = $sth->fetchAll();

  $excel = "";
  $excel .=  "ID\tNom\tPrenom\tEmail\tVille\tTelephone\tmot de passe\tRole\n";

  foreach($newReservations as $row) {
      $excel .= "$row[id]\t$row[nom]\t$row[prenom]\t$row[email]\t$row[ville]\t$row[tel]\t$row[mdp]\t$row[role]\n";
  }

  header("Content-type: application/vnd.ms-excel");
  header("Content-disposition: attachment; filename=liste-compte.xls");

  print $excel;
  exit;

           }

           catch(PDOException $e){
               echo "Erreur : " . $e->getMessage();
           }

?>
