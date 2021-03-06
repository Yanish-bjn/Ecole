<!DOCTYPE html>
<html lang="en">

<!-- Début d'une session -->
<?php
session_start();
 ?>

  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="../img/favicon.png" type="image/png" />
    <title>Evenement étudiant</title>

    <!-- Liens contenant le style du tableau -->
<link rel="stylesheet" type="text/css" href="../tableau/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../tableau/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../tableau/vendor/animate/animate.css">
<link rel="stylesheet" type="text/css" href="../tableau/vendor/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="../tableau/vendor/perfect-scrollbar/perfect-scrollbar.css">
<link rel="stylesheet" type="text/css" href="../tableau/css/util.css">
<!--link rel="stylesheet" type="text/css" href="../tableau/css/main.css"-->
<!--link rel="stylesheet" type="text/css" href="../tableau/css/style2.css"-->
<!--link rel="stylesheet" type="text/css" href="../tableau/css/style3.css"-->

    <!-- Liens contenant le style de la page -->
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/flaticon.css" />
    <link rel="stylesheet" href="../css/themify-icons.css" />
    <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/style3.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">



  </head>

  <body>
    <!--================ Début de la navbar =================-->
    <header class="header_area white-header">
      <div class="main_menu">
        <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
              <input
                type="text"
                class="form-control"
                id="search_input"
                placeholder="Search Here"
              />
              <button type="submit" class="btn"></button>
              <span
                class="ti-close"
                id="close_search"
                title="Close Search"
              ></span>
            </form>
          </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html">
              <img class="logo-2" src="img/logo2.png" alt="" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="container">
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav ml-auto">

                <?php
                //Si il y a une session ouverte
                if (isset($_SESSION['email'])){
                  //Si la personne est un client
                  if ($_SESSION['role'] == "client") { ?>
                    <div class="position2">
                    <?php echo'Lycée Robert Schuman'?>
                    </div>
                    <li class="nav-item">
                      <a class="nav-link" href="../index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="offre_emploi_client.php">Offres</a>
                    </li>
                    <li class="nav-item submenu dropdown">
                      <a href="evenement.php" class="nav-link dropdown-toggle"> Evénements
                      </a>
                      <ul class="dropdown-menu">
                        <li class="nav-item">
                          <a class="nav-link" href="evenement_etudiant.php">Etudiant</a>
                        </ul>
                    </li>
                    <li class="nav-item submenu dropdown">
                      <a href="messagerie.php" class="nav-link dropdown-toggle">Messagerie
                      </a>
                      <ul class="dropdown-menu">
                        <li class="nav-item">
                          <a class="nav-link" href="messagerie_priver.php">Messagerie privé</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="moncompte_client.php">Mon compte</a>
                    </li>
                    <li class="nav-item submenu dropdown">
                      <a href="moncompte_client.php" class="nav-link dropdown-toggle"><?php echo'Bienvenue : ', $_SESSION['prenom'];?>
                      </a>
                      <ul class="dropdown-menu">
                        <li class="nav-item">
                          <a class="nav-link" href="../traitement/deconnexion.php">Déconnexion</a>
                        </li>
                      </ul>
                    </li>

                  <?php  }
                    //Sinon c'est donc un admin
                    else { ?>
                      <div class="position2">
                      <?php echo'Lycée Robert Schuman'?>
                      </div>
                      <li class="nav-item">
                        <a class="nav-link" href="../index.php">Accueil</a>
                      </li>
                      <li class="nav-item submenu dropdown">
                        <a class="nav-link" href="contact_admin.php">Contact</a>
                        </a>
                        <ul class="dropdown-menu">
                          <li class="nav-item">
                            <a class="nav-link" href="../exportation/contact.php" onClick='javascript:contact();'>Exportation</a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="offre_emploi.php">Offres</a>
                      </li>
                      <li class="nav-item submenu dropdown">
                        <a href="evenement.php" class="nav-link dropdown-toggle"> Evénements
                        </a>
                        <ul class="dropdown-menu">
                          <li class="nav-item">
                            <a class="nav-link" href="evenement_admin.php">Etudiant</a>
                          </li>
                         <li class="nav-item">
                              <a class="nav-link" href="../exportation/evenement.php">Exportation</a>
                            </ul>
                      </li>
                      <li class="nav-item submenu dropdown">
                        <a href="messagerie_admin.php" class="nav-link dropdown-toggle">Messagerie
                        </a>
                        <ul class="dropdown-menu">
                          <li class="nav-item">
                            <a class="nav-link" href="messagerie_priver.php">Messagerie privé</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="../exportation/message.php" onClick='javascript:message();'>Exportation</a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item submenu dropdown">
                        <a href="moncompte_admin.php" class="nav-link dropdown-toggle"> Mon compte
                        </a>
                        <ul class="dropdown-menu">
                          <li class="nav-item">
                            <a class="nav-link" href="../exportation/compte.php">Exportation</a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item submenu dropdown">
                        <a href="admin.php" class="nav-link dropdown-toggle"><?php echo'Bienvenue : ', $_SESSION['prenom'];?>
                        </a>
                        <ul class="dropdown-menu">
                          <li class="nav-item">
                            <a class="nav-link" href="../traitement/deconnexion.php">Déconnexion</a>
                          </li>
                        </ul>
                      </li>

                 <?php }
              }
              //Sinon il n'y a pas de sessions ouverte
              else{ ?>
                <li class="nav-item">
                  <a class="nav-link" href="../index.php">Accueil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item submenu dropdown">
                  <a href="evenement.php" class="nav-link dropdown-toggle"> Evénements
                  </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="evenement.php">Ecole</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="connexion.php">Connexion</a>
                </li>

                <?php	}  ?>

                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================ Fin de la navbar =================-->

    <!--================ Nom de la page =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Evénements </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Fin du nom de la page =================-->

    <?php
  	try{
  		$bdd= new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','yanish', 'root');
  	}
  	catch (Exception $e){
  		die('Erreur:'.$e->getMessage());
  	}
  	?>


<div class="container">

  <!-- Affichage du tableau contenant des informations -->

  <p>
  						<table id="myTable" class="Display">
  							<thead>
                  <tr class="">
                    <th class="">Nom de l'évènement</th>
                    <th class="">Nom de la personne</th>
                    <th class="">Date de l'évènement</th>
                    <th class="">Description</th>
                  </tr>
                </thead>
            </div></p>

            <div class="">
                <tbody>
                  <!-- Selection de tout les événements -->
                  <?php
                  $req = $bdd->prepare('SELECT * FROM evenement');
                  $req->execute(array('email'=>$_SESSION['email']));
                  $donnees= $req->fetchall();

                  foreach ($donnees as $value) {
                    echo '<tr class="">
                          <td class="">'.$value["nom_evenement"].'</td>
                          <td class="">'.$value["nom_personne"].'</td>
                          <td class="">'.$value["date"].'</td>
                          <td class="">'.$value["description"].'</td>
                          </tr>';
                  }
                  ?>


  							</tbody>
  						</table>
  					</div>
  				</div>

       </div>
  			</div>
  		</div>
  	</div>

</div>
<br>

<!--================ Début du footer =================-->
<footer class="footer-area section_gap">
  <div class="container">
    <div class="row">
    <?php if ($_SESSION['role'] == "admin") { ?>
      <div class="col-lg-2 col-md-6 single-footer-widget">
        <h4>Information</h4>
        <ul>
          <li><a href="../index.php">Accueil</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6 single-footer-widget">
        <h4>Demandes</h4>
        <ul>
          <li><a href="contact_admin.php">Contact</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6 single-footer-widget">
        <h4>Forum</h4>
        <ul>
          <li><a href="messagerie_admin.php">Chat</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6 single-footer-widget">
        <h4>Message</h4>
        <ul>
          <li><a href="messagerie_priver.php">Messagerie</a></li>
        </ul>
      </div>
    <?php }
  elseif($_SESSION['role'] == "client") { ?>
      <div class="col-lg-2 col-md-6 single-footer-widget">
        <h4>Informations</h4>
        <ul>
          <li><a href="../index.php">Accueil</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6 single-footer-widget">
        <h4>Prendre contact</h4>
        <ul>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6 single-footer-widget">
        <h4>Forum</h4>
        <ul>
          <li><a href="messagerie.php">Chat</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6 single-footer-widget">
        <h4>Message</h4>
        <ul>
          <li><a href="messagerie_priver.php">Messagerie</a></li>
        </ul>
      </div>
    <?php }
  else{ ?>
    <div class="col-lg-2 col-md-6 single-footer-widget">
      <h4>Informations</h4>
      <ul>
        <li><a href="../index.php">Accueil</a></li>
      </ul>
    </div>
    <div class="col-lg-2 col-md-6 single-footer-widget">
      <h4>Prendre contact</h4>
      <ul>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
    <div class="col-lg-2 col-md-6 single-footer-widget">
      <h4>Etudiant</h4>
      <ul>
        <li><a href="connexion.php">Connexion</a></li>
      </ul>
    </div>
    <div class="col-lg-2 col-md-6 single-footer-widget">
      <h4>Vous inscrire</h4>
      <ul>
        <li><a href="inscription.php">Inscription</a></li>
      </ul>
    </div>
  <?php	}  ?>
    </div>
    <div class="row footer-bottom d-flex justify-content-between">
      <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Ce site internet a était mis en place part Yanish et Thomas.
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
      <div class="col-lg- col-sm-12 footer-social">
        <a href="https://fr-fr.facebook.com/pages/lyc%C3%A9e-robert-shuman-dugny/138783332978707"><i class="ti-facebook"></i></a>
        <a href="https://www.linkedin.com/authwall?trk=ripf&trkInfo=AQEox7flDVgK6wAAAXTU30Sg9G1wuydfYLa76GB2oassbBSdjOi9-W4ZjXPYF8_C316tFE1wSZJQcJXqWoZZ_TSYGc-KGAmfL2kQ0G2cJ_EJNiW2QL5Z-8o7AyjmF9l5fSLAA-I=&originalReferer=https://www.google.com/&sessionRedirect=https%3A%2F%2Ffr.linkedin.com%2Fschool%2Flyc%25C3%25A9erobertschuman%2F"><i class="ti-linkedin"></i></a>
      </div>
    </div>
  </div>
</footer>
<!--================ Fin du footer =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/stellar.js"></script>
    <script src="../vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="../vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="../js/owl-carousel-thumb.min.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="../js/gmaps.min.js"></script>
    <script src="../js/contact.js"></script>
    <script src="../js/theme.js"></script>

    <!-- Liens contenant le script du tableau -->
	<script src="../tableau/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="../tableau/vendor/bootstrap/js/popper.js"></script>
	<script src="../Tableau/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../tableau/vendor/select2/select2.min.js"></script>
	<script src="../tableau/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

  <SCRIPT language="JavaScript">
//Gestion d'erreur //
  function cacherDiv() {
       document.getElementById("reussie").style.display = "none";
  }
  function cacherDiv1() {
       document.getElementById("modifier").style.display = "none";
  }
  function cacherDiv3() {
       document.getElementById("supprimer").style.display = "none";
  }

  function cacherDiv2() {
       document.getElementById("erreur").style.display = "none";
  }
 // Fonctikn permettant l'exportation des données au format PDF //
  function compte()
    {
    w1 = window.open("../exportation/compte_pdf.php");
    }
  function message()
    {
    w1 = window.open("../exportation/message_pdf.php");
    }

  function evenement()
    {
    w1 = window.open("../exportation/evenement_pdf.php");
    }

    function offre()
      {
      w1 = window.open("../exportation/offre_pdf.php");
      }

    function contact()
      {
      w1 = window.open("../exportation/contact_pdf.php");
      }
    function reponse()
      {
      w1 = window.open("../exportation/reponse_pdf.php");
      }
      var table = $('#myTable').DataTable({
        "language": {
         "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
          }
      });
      $(document).ready( function () {
    $('#myTable').DataTable();
} );
</SCRIPT>
  </body>
</html>
