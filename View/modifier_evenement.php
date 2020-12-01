<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Liens conteant le style de la page  -->
    <link rel="stylesheet" href="../evenement/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="../tableau/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../evenement/css/style.css">
    <link rel="stylesheet" href="../evenement/css/style2.css">

</head>
<?php
// Test de connextion à la base de données //
try{
  $bdd= new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
}
catch (Exception $e){
  die('Erreur:'.$e->getMessage());
}
 // Fin du test //
?>
<!--================ Gestion d'erreur permetant d'afficher un message =================-->
<SCRIPT language="JavaScript">

function cacherDiv2() {
     document.getElementById("erreur").style.display = "none";
}
</SCRIPT>

<?php
ini_set('display_errors', 'off');
if($_GET['msg'] == 2) { ?>
  <body onload="setTimeout(cacherDiv2,4000);">
<div id="erreur" class="erreur">
<?php echo "Erreur veuillez réessayer";
}?>
</div>
</body>
<!--================ Fin de la gestion d'erreur =================-->
<body>

    <div class="main">
      <?php
      $id = $_GET['id'];
      // Sélectionne toutes les informations de la table evenement en fonction de l'id//
      $req = $bdd->query("SELECT * FROM evenement where id = '$id' ");
      $donnees= $req->fetchall();

      foreach ($donnees as $value) {
        $nom_evenement  = $value['nom_evenement'];
        $nom_personne  = $value['nom_personne'];
        $date  = $value['date'];
        $description  = $value['description'];
        $id  = $value['id'];


      //affiche les valeurs //
      ?>

        <!--================ Début du formulaire =================-->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Modifier evenement</h2>
                        <form method="POST" action="../manager/modifier_evenement.php" class="register-form" id="register-form">

                            <div class="form-group">
                                <label for="nom_evenement"><i class="fa fa-calendar"></i></label>
                                <input type="text" name="nom_evenement" id="name" placeholder="Nom de l'évènement" <?php echo 'value='.'"'.$value["nom_evenement"].'"'.''?> required/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nom_personne" id="name" placeholder="Nom de la personne" <?php echo 'value='.'"'.$value["nom_personne"].'"'.''?> required/>
                            </div>
                            <div class="form-group">
                                <label for="date"><i class="fa fa-clock-o"></i></label>
                                <input type="date" name="date" id="email" placeholder="Entrer la date" <?php echo 'value='.'"'.$value["date"].'"'.''?> required/>
                            </div>
                            <div class="form-group">
                                <label for="description"><i class="fa fa-comment-o"></i></label>
                                <input type="text" name="description" id="description" placeholder="Description" <?php echo 'value='.'"'.$value["description"].'"'.''?> required/>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="id" id="id" placeholder="Id" <?php echo 'value='.'"'.$value["id"].'"'.''?> required/>
                            </div>


                        <?php
                          }
                        ?>

                            <div class="form-group form-button">
                              <input type="submit" name="signup" id="signup" class="btn btn-warning" value="Modifier"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../evenement/images/evenement.jpg" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Fin du formulaire =================-->
    </div>

    <!-- Liens contetant le script de la page -->
    <script src="../evenement/vendor/jquery/jquery.min.js"></script>
    <script src="../evenement/js/main.js"></script>
</body>
</html>
