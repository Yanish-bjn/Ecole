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
    <title>Modification du compte</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../inscription/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="../inscription/css/style.css">
    <link rel="stylesheet" href="../inscription/css/style2.css">
    <link rel="stylesheet" href="../inscription/css/style3.css">
    <link rel="stylesheet" href="../inscription/css/style4.css">

</head>
<body>

    <div class="main">
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
                                <?php echo $_SESSION['nom']; ?>
                                <input type="text" name="nom" id="nom" required />
                            </div>
                            <div class="form-group">
                                <label for="father_name">Prénom :</label>
                                <?php echo $_SESSION['prenom']; ?>
                                <input type="text" name="prenom" id="father_name" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Email :</label>
                            <?php echo $_SESSION['email']; ?>
                            <input type="text" name="email" id="address" required/>
                        </div>

                        <div class="form-group">
                            <p>
                        <label>
                          Tapez le début d'un nom de ville ou d'un code postal puis appuyez sur <b>Entrée</b>.<br>
                        </label>
                          <?php echo $_SESSION['ville']; ?>
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
                            <?php echo $_SESSION['tel']; ?>
                            <input type="text" name="tel" minlength="10" maxlength="10" id="birth_date" required>
                        </div>
                        <div class="form-group">
                            <label for="pincode">Mot de passe :</label>
                            <input type="password" name="mdp" id="pincode" required>
                        </div>

                        <div class="form-submit">
                            <input type="submit" value="Valider" class="submit" name="submit" id="submit"/>
                            <button type="button" class="btn btn-warning" onclick="window.location.href='moncompte_admin.php'">Revenir en arrière</button>
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
    <script src="../inscription/js/main2.js"></script>
    <script src="../inscription/js/api.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
