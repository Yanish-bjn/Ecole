<?php


try{
  //Test de connexion a la bdd //
  $dbco = new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
  $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //Selection des informations de la table //
  $sql = "SELECT * FROM compte";
  $sth = $dbco->prepare($sql);
  $sth->execute();
  //Récupération des données //

  $newReservations = $sth->fetchAll();

  // Présentation des données via les collones suivante //
  $excel = "";
  $excel .=  "ID\tNom\tPrenom\tEmail\tVille\tTelephone\tmot de passe\tRole\n";

  foreach($newReservations as $row) {
    // Ajouter les données a chaque colonne //
      $excel .= "$row[id]\t$row[nom]\t$row[prenom]\t$row[email]\t$row[ville]\t$row[tel]\t$row[mdp]\t$row[role]\n";
  }
  // Exportation au format excel.xls //
  header("Content-type: application/vnd.ms-excel");
  header("Content-disposition: attachment; filename=liste-compte.xls");

  print $excel;
  exit;

           }
           // Si la connexion a la bdd echoue alors on affiche une erreur //
           catch(PDOException $e){
               echo "Erreur : " . $e->getMessage();
           }

?>
