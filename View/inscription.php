<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../inscription/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../inscription/css/style.css">
    <link rel="stylesheet" href="../inscription/css/style2.css">
    <link rel="stylesheet" href="../inscription/css/style3.css">
    <link rel="stylesheet" href="../inscription/css/style4.css">
    <link rel="stylesheet" href="../css/erreur.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

</head>

<SCRIPT language="JavaScript">
function cacherDiv2() {
     document.getElementById("erreur").style.display = "none";
}

function cacherDiv3() {
     document.getElementById("compte").style.display = "none";
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
</body>

<?php
ini_set('display_errors', 'off');
if($_GET['msg'] == 3) { ?>
  <body onload="setTimeout(cacherDiv3,4000);">
<div id="compte" class="erreur">
<?php echo "Erreur, l'email existe veuillez vous connecter";
}?>
</div>
</body>

<?php
ini_set('display_errors', 'off');
if($_GET['msg'] == 4) { ?>
  <body onload="setTimeout(cacherDiv3,4000);">
<div id="compte" class="erreur">
<?php echo "Erreur, le nom existe, veuillez vous connecter";
}?>
</div>
</body>

<?php
ini_set('display_errors', 'off');
if($_GET['msg'] == 5) { ?>
  <body onload="setTimeout(cacherDiv3,4000);">
<div id="compte" class="erreur">
<?php echo "Erreur, le prenom existe, veuillez vous connecter";
}?>
</div>
</body>

<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="../inscription/images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" action="../manager/inscription.php" class="register-form" id="register-form">
                        <h2>Inscription :</h2>
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
                            <input type="email" name="email" id="address" required/>
                        </div>
                        <div class="form-group">
                            <label for="birth_date">Numéro de télephone :</label>
                            <input type="tel" name="tel" maxlength="10" minlength="10"  pattern="[0-9]{10}" id="birth_date" required>

                        </div>
                        <div class="form-group">
                          <p>
                      <label>
                        Tapez le début d'un nom de ville ou d'un code postal puis appuyez sur <b>Ctrl + Entrée</b>.<br>
                        <input id="ville" name="ville" placeholder="Entrez un code postal ou une ville" autocomplete="on" size="50">
                      </label>
                    </p>
                    <ul>
                      <li data-vicopo="#ville">
                        <strong data-vicopo-code-postal></strong>
                        <span data-vicopo-ville></span>
                      </li>
                    </ul>
                    </div>
                        <div class="form-group">
                            <label for="pincode">Mot de passe :</label>
                            <input type="password" name="mdp" id="pincode" required>
                        </div>
                        <div class="form-submit">
                          <button type="submit" class="btn btn-secondary">Valider</button>
                            <button type="button" class="btn btn-warning" onclick="window.location.href='connexion.php'">Deja inscrit ?</button>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="../inscription/vendor/jquery/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="../inscription/js/api.js"></script>
    <script src="../inscription/js/main2.js"></script>
    <script src="../inscription/js/main.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
