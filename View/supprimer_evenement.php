<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../evenement/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="../tableau/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="../evenement/css/style.css">
    <link rel="stylesheet" href="../evenement/css/style2.css">
    <link rel="stylesheet" href="../css/erreur.css">
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

<?php
ini_set('display_errors', 'off');
if($_GET['msg'] == 2) { ?>
<div id="erreur" class="erreur">
<?php echo "Erreur veuillez réessayer";
}?>
</div>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Supprimer évènement</h2>
                        <form method="POST" action="../manager/supprimer_evenement.php" class="register-form" id="register-form">
                            <div class="form-group">
                            <h6>Choisissez le nom de l'événement à supprimer :</h6>  <select class="form-control" name="nom_evenement" placeholder="Choisissez l'id">


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
                              <input type="submit" name="signup" id="signup" class="btn btn-warning" value="Supprimer"/>
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
