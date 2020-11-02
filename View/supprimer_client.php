<!DOCTYPE html>
<html lang="en">

<?php
session_start();
try{
  $bdd= new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
}
catch (Exception $e){
  die('Erreur:'.$e->getMessage());
}

 ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification d'un client</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../inscription/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <!-- Main css -->
    <link rel="stylesheet" href="../inscription/css/style.css">
    <link rel="stylesheet" href="../inscription/css/style2.css">
    <link rel="stylesheet" href="../inscription/css/style3.css">
    <link rel="stylesheet" href="../css/erreur.css">
</head>

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
<?php echo "Erreur, veuillez réessayer";
}?>
</div>

<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="../inscription/images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" action="../manager/supprimer_client.php" class="register-form" id="register-form">
                        <p><h4>Suppression</h4></p>

                        <h6>Choisissez le nom de la personne à supprimer :</h6>  <select class="form-group" name="nom" placeholder="Choisissez l'id">


                        <?php
                      // Sélectionne les nom de la table compte en fonction du role //
                      $req = $bdd->query('SELECT nom FROM compte');
                      $donnees= $req->fetchall();

                      //Liste déroulante avec le nom de chaque client
                      foreach ($donnees as $value) {
                      //affiche les valeurs //
                      echo '<option>'.$value["nom"].'</option>';
                      }
                      ?>
                      </select>


                        <div class="form-submit">
  <!-- Button trigger modal -->
  <a class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">Supprimer</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supprimer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Etes-vous sur de vouloir supprimer cet évènement ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <input type="submit" value="Valider" class="submit" name="submit" id="submit"/>
      </div>
    </div>
  </div>
</div>
  <button type="button" class="btn btn-warning" onclick="window.location.href='moncompte_admin.php'">Revenir en arrière</button>

                          </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="../inscription/vendor/jquery/jquery.min.js"></script>
    <script src="../inscription/js/main.js"></script>
    <script src="../tableau/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="../tableau/vendor/bootstrap/js/popper.js"></script>
    <script src="../Tableau/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="../tableau/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="../tableau/vendor/bootstrap/js/popper.js"></script>
    <script src="../Tableau/vendor/bootstrap/js/bootstrap.min.js"></script>


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
