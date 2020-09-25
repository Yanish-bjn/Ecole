<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../evenement/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../evenement/css/style.css">
</head>

<?php
//Connexion à la bdd
try{
  $bdd= new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
}
catch (Exception $e){
  die('Erreur:'.$e->getMessage());
}
?>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Évènement</h2>
                        <form method="POST" action="../manager/supprimer_evenement.php" class="register-form" id="register-form">
                            <div class="form-group">
                            <h4>Choisissez le nom de l'événement à supprimer :</h4>  <select class="form-control" name="nom_evenement" placeholder="Choisissez l'id">


                            <?php
                    // Sélectionne les nom de la table compte en fonction du role //
                    $req = $bdd->query('SELECT nom_evenement FROM evenement');
                    $donnees= $req->fetchall();

                    //Liste déroulante avec le nom de chaque client
                    foreach ($donnees as $value) {
                      //affiche les valeurs //
                      echo '<option>'.$value["nom_evenement"].'</option>';
                    }
                    ?>
                  </select>
                    </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Supprimer"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../evenement/images/evenement.jpg" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="../evenement/vendor/jquery/jquery.min.js"></script>
    <script src="../evenement/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
