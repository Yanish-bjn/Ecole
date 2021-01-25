<?php

try{
  //Test de connexion a la bdd //
  $dbco = new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','yanish','root');
  $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //Selection des informations de la table //
  $sql = "SELECT * FROM contact";
  $sth = $dbco->prepare($sql);
  $sth->execute();
  //Récupération des données //

  $newReservations = $sth->fetchAll();
  // Présentation des données via les collones suivante //
  $excel = "";
  $excel .=  "ID\tNom\tEmail\tSujet\tMessage\n";

  foreach($newReservations as $row) {
    // Ajouter les données a chaque colonne //
      $excel .= "$row[id]\t$row[nom]\t$row[email]\t$row[sujet]\t$row[message]\n";
  }
  // Exportation au format excel.xls //
  header("Content-type: application/vnd.ms-excel");
  header("Content-disposition: attachment; filename=liste-contact.xls");

  print $excel;
  exit;

           }
           // Si la connexion a la bdd echoue alors on affiche une erreur //
           catch(PDOException $e){
               echo "Erreur : " . $e->getMessage();
           }

?>
