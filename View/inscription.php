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

</head>
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
                            <input type="text" name="email" id="address" required/>
                        </div>
                        <div class="form-group">
                            <label for="birth_date">Numéro de télephone :</label>
                            <input type="tel" name="tel" maxlength="10" minlength="10" id="birth_date">

                        </div>
                        <div class="form-group">
                            <label for="pincode">Mot de passe :</label>
                            <input type="password" name="mdp" id="pincode">
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Valider" class="submit" name="submit" id="submit"/>
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
    <script src="../inscription/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>