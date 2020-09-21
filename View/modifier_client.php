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

//Sélection des id de la table compte en fonction du nom //
$req = $bdd->prepare('SELECT id FROM compte WHERE nom=?');
$id= $req->fetch();
$_SESSION['id'] = $id[0];
//Sélection de l'ensemble des informations de la table compte en fonction de l'id //
$rec = $bdd->prepare('SELECT * FROM compte WHERE id=?');
$rec->execute(array($id[0]));
$donnees= $rec->fetch();
 ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification d'un client</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../inscription/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../inscription/css/style.css">
    <link rel="stylesheet" href="../inscription/css/style2.css">
    <link rel="stylesheet" href="../inscription/css/style3.css">

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
                        <h2>Modification :</h2>
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
                            <label for="birth_date">Numéro de télephone :</label>
                            <input type="text" name="tel" minlength="10" maxlength="10" id="birth_date">
                        </div>
                        <div class="form-group">
                            <label for="pincode">Mot de passe :</label>
                            <input type="password" name="mdp" id="pincode">
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Valider" class="submit" name="submit" id="submit"/>
                            <a class="submit" href="connexion.php"> Deja inscrit ?</a>
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
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
