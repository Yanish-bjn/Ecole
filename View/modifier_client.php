<!DOCTYPE html>
<html lang="en">
<!--================ Début d'une session =================-->
<?php
session_start();
// Test de connexion à la base de données //
try{
  $bdd= new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','yanish', 'root');
}
catch (Exception $e){
  die('Erreur:'.$e->getMessage());
}
// Fin du test //

 ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification du compte</title>

    <!-- Liens contetant le style de la page -->
    <link rel="stylesheet" href="../inscription/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../inscription/css/style.css">
    <link rel="stylesheet" href="../inscription/css/style2.css">
    <link rel="stylesheet" href="../inscription/css/style3.css">
    <link rel="stylesheet" href="../inscription/css/style4.css">
    <link rel="stylesheet" href="../css/erreur.css">


</head>
<!--================ Gestion d'erreur permetant d'afficher un message =================-->
<SCRIPT language="JavaScript">

function cacherDiv2() {
     document.getElementById("erreur").style.display = "none";
}
</SCRIPT>

<?php
ini_set('display_errors', 'off');
if($_GET['msg'] == 2) { ?>
<div id="erreur" class="erreur">
  <body onload="setTimeout(cacherDiv2,4000);">
<?php echo "Erreur veuillez réessayer";
}?>
</div>
</body>
<!--================ Fin de la gestion d'erreur =================-->

<body>

    <div class="main">
      <?php
      $id = $_GET['id'];
      // Sélectionne tout de la table compte en fonction de l'id //
      $req = $bdd->query("SELECT * FROM compte where id = '$id' ");
      $donnees= $req->fetchall();

      //Liste déroulante avec le nom de chaque client
      foreach ($donnees as $value) {
        $nom  = $value['nom'];
        $prenom  = $value['prenom'];
        $email  = $value['email'];
        $ville  = $value['ville'];
        $tel  = $value['tel'];


      //affiche les valeurs //
      ?>
      <!--================ Début du formulaire =================-->
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="../inscription/images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" action="../manager/modifier_client.php" class="register-form" id="register-form">
                        <h2>Modification compte :</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nom">Nom :</label>
                                <input type="text" name="nom" id="nom" <?php echo 'value='.'"'.$value["nom"].'"'.''?> required />
                            </div>
                            <div class="form-group">
                                <label for="father_name">Prénom :</label>
                                <input type="text" name="prenom" id="prenom" <?php echo 'value='.'"'.$value["prenom"].'"'.''?> required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Email :</label>
                            <input type="text" name="email" id="email" <?php echo 'value='.'"'.$value["email"].'"'.''?> required/>
                        </div>

                        <div class="form-group">
                            <p>
                        <label>
                          Tapez le début d'un nom de ville ou d'un code postal puis appuyez sur <b>Entrée</b>.<br>
                        </label>
                          <input type="texte"  name="ville" id="ville" placeholder="Entrez un code postal ou une ville" <?php echo 'value='.'"'.$value["ville"].'"'.''?> autocomplete="on" size="50" required>
                            </p>
                      <ul>
                        <li data-vicopo="#ville">
                          <strong data-vicopo-code-postal></strong>
                          <span data-vicopo-ville></span>
                        </li>
                      </ul>
                    </div>

                        <div class="form-group">
                            <label for="birth_date">Numéro de télephone :</label>
                            <input type="text" name="tel" minlength="10" maxlength="10" id="tel" <?php echo 'value='.'"'.$value["tel"].'"'.''?> required>
                        </div>
                        <div class="form-group">
                            <label for="pincode">Mot de passe :</label>
                            <input type="password" name="mdp" id="mdp" required>
                        </div>
                      <?php  }?>


                        <div class="form-submit">
                          <button type="submit" class="btn btn-secondary">Valider</button>
                            <button type="button" class="btn btn-warning" onclick="window.location.href='moncompte_client.php'">Revenir en arrière</button>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Liens contenant le script de la page -->
    <script src="../inscription/vendor/jquery/jquery.min.js"></script>
    <script src="../inscription/js/main.js"></script>
    <script src="../inscription/js/main2.js"></script>
    <script src="../inscription/js/api.js"></script>
</body>
</html>
