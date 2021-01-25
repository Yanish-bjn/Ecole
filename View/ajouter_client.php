<!DOCTYPE html>
<html lang="en">
<!--================ Début d'une session  =================-->
<?php
session_start();
// Test de connexion a la base de données //
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
    <title>Ajouter d'un client ou admin</title>

    <!-- Style de la page -->
    <link rel="stylesheet" href="../inscription/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="../inscription/css/style.css">
    <link rel="stylesheet" href="../inscription/css/style2.css">
    <link rel="stylesheet" href="../inscription/css/style3.css">
    <link rel="stylesheet" href="../inscription/css/style4.css">

</head>
<!--================ Gestion d'erreur affiche un message  =================-->
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
<!--================ Fin de la gestion d'erreur  =================-->
<body>
  <!--================ Affichage du formulaire  =================-->
    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="../inscription/images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" action="../manager/ajouter_client.php" class="register-form" id="register-form">
                        <h2>administrateur :</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Nom :</label>
                                <input type="text" name="nom" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="father_name">Prénom :</label>
                                <input type="text" name="prenom" id="father_name" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Email :</label>
                            <input type="text" name="email" id="address" required/>
                        </div>

                        <div class="form-group">
                            <p>
                        <label>
                          Tapez le début d'un nom de ville ou d'un code postal puis appuyez sur <b> Ctrl + Entrée</b>.<br>
                        </label>
                          <input type="texte"  name="ville" id="ville" placeholder="Entrez un code postal ou une ville" autocomplete="on" size="50" required>
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
                            <input type="text" name="tel" minlength="10" maxlength="10" id="birth_date" required>
                        </div>
                        <div class="form-group">
                            <label for="pincode">Mot de passe :</label>
                            <input type="password" name="mdp" id="pincode" required>
                        </div>

                        <h6>Choisissez le rôle de la personne :</h6>  <select class="form-group" name="role" placeholder="Choisissez le role">
                          <option>admin</option>
                          <option>client</option>
                        </select>
                        <div class="form-submit">
                            <button type="submit" class="btn btn-secondary">Valider</button>
                            <button type="button" class="btn btn-warning" onclick="window.location.href='moncompte_admin.php'">Revenir en arrière</button>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Liens JS de la page -->
    <script src="../inscription/vendor/jquery/jquery.min.js"></script>
    <script src="../inscription/js/main.js"></script>
    <script src="../inscription/js/main2.js"></script>
    <script src="../inscription/js/api.js"></script>
</body>
</html>
