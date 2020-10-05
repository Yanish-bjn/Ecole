<!DOCTYPE html>
<html lang="en">

<?php
session_start();
 ?>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="../img/favicon.png" type="image/png" />
    <title>Messagerie</title>

    <!-- Liens contenant le style du tableau -->

<link rel="stylesheet" type="text/css" href="../tableau/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../tableau/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../tableau/vendor/animate/animate.css">
<link rel="stylesheet" type="text/css" href="../tableau/vendor/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="../tableau/vendor/perfect-scrollbar/perfect-scrollbar.css">
<link rel="stylesheet" type="text/css" href="../tableau/css/util.css">
<link rel="stylesheet" type="text/css" href="../tableau/css/main.css">
<link rel="stylesheet" type="text/css" href="../tableau/css/style2.css">
<link rel="stylesheet" type="text/css" href="../tableau/css/style3.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/flaticon.css" />
    <link rel="stylesheet" href="../css/themify-icons.css" />
    <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="../css/style.css" />

  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
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
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
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
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav ml-auto">

                <?php
                //Si il y a une session ouverte
                if (isset($_SESSION['email'])){
                  //Si la personne est un client
                  if ($_SESSION['role'] == "client") { ?>
                    <li class="nav-item active">
                      <a class="nav-link" href="../index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item submenu dropdown">
                      <a href="evenement.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Evénements
                      </a>
                      <ul class="dropdown-menu">
                        <li class="nav-item">
                          <a class="nav-link" href="evenement_etudiant.php">Etudiant</a>
                        </ul>
                    </li>
                    <li class="nav-item submenu dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Messagerie
                      </a>
                      <ul class="dropdown-menu">
                        <li class="nav-item">
                          <a class="nav-link" href="messagerie.php">Messagerie</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="moncompte_client.php">Mon compte</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../traitement/deconnexion">Déconnexion</a>
                    </li>
                    <a href="#" class="nav-link search" id="search">
                      <i class="ti-search"></i>
                    </a>
                  <?php  }
                    //Sinon c'est donc un admin
                   else { ?>
                     <li class="nav-item active">
                       <a class="nav-link" href="../index.php">Accueil</a>
                     </li>
                     <li class="nav-item submenu dropdown">
                       <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Evénements
                       </a>
                       <ul class="dropdown-menu">
                         <li class="nav-item">
                           <a class="nav-link" href="evenement_admin.php">Etudiant</a>
                         </li>
                       </ul>
                     </li>
                     <li class="nav-item submenu dropdown">
                       <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Messagerie
                       </a>
                       <ul class="dropdown-menu">
                         <li class="nav-item">
                           <a class="nav-link" href="messagerie.php">Messagerie</a>
                         </li>
                       </ul>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="moncompte_admin.php">Mon compte</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="../traitement/deconnexion.php">Déconnexion</a>
                     </li>
                     <a href="#" class="nav-link search" id="search">
                       <i class="ti-search"></i>
                     </a>
                <?php }
              }
              //Sinon il n'y a pas de sessions ouverte
              else{ ?>
                <li class="nav-item active">
                  <a class="nav-link" href="../index.php">Accueil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item submenu dropdown">
                  <a href="evenement.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Evénements
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
                <li class="nav-item">
                  <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                  </a>
                <?php	}  ?>

                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Messagerie </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <?php
  	try{
  		$bdd= new PDO('mysql:host=localhost;dbname=ecole; charset=utf8','root','');
  	}
  	catch (Exception $e){
  		die('Erreur:'.$e->getMessage());
  	}
  	?>

  <!-- Affichage du tableau contenant des informations -->
<div class="container">
  <p>  <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100 ver1 m-b-110">
          <div class="table100-head">
  						<table>
  							<thead>
                  <tr class="row100 head">
                    <th class="cell100 column1">Nom</th>
                    <th class="cell100 column2">prenom</th>
                    <th class="cell100 column3">date</th>
                    <th class="cell100 column4">message</th>
                  </tr>
                </thead>
              </table>
            </div></p>

            <div class="table100-body js-pscroll">
              <table>
                <tbody>
                  <!-- Selection de toute les réservations -->
                  <?php
                  $req = $bdd->prepare('SELECT * FROM chat');
                  $req->execute(array('email'=>$_SESSION['email']));
                  $donnees= $req->fetchall();

                  foreach ($donnees as $value) {
                    echo '<tr class="row100 body">
                          <td class="cell100 column1">'.$value["nom"].'</td>
                          <td class="cell100 column2">'.$value["prenom"].'</td>
                          <td class="cell100 column3">'.$value["date"].'</td>
                          <td class="cell100 column4">'.$value["message"].'</td>
                          </tr>';
                  }
                  ?>


  							</tbody>
  						</table>

  					</div>
  				</div>
          <p><div class="col-md-12 text-right">
            <button type="button" class="btn btn-warning" onclick="window.location.href='messagerie.php'">Actualiser</button>

          </div></p>
       </div>
  			</div>
  		</div>
  	</div>

    <div class="container">
      <form method="POST" action="../manager/messagerie.php"
        class="row contact_form"
        action="contact_process.php"
        method="post"
        id="contactForm"
        novalidate="novalidate"
      >
        <div class="col-md-9">
          <div class="form-group">
            <input  readonly="readonly" type="text" value=" <?php
           date_default_timezone_set('Europe/Paris');
           echo date('d | m | Y | h:i:s'). '';
       ?>" class="form-control" id="datetime" name="date" />

          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input class="form-control" type="text "name="message" id="message" placeholder="Votre message" ></textarea>
          </div>
        </div>
        <div class="col-md-12 text-right">
          <button type="submit" value="submit" class="btn primary-btn">
            Envoyé votre message
          </button>
        </div>
      </form>
</div>
<p>
<!--================ Start footer Area  =================-->
<footer class="footer-area section_gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-6 single-footer-widget">
        <h4>informations</h4>
        <ul>
          <li><a href="../index.php">Nous concernant</a></li>
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
      <div class="col-lg-4 col-md-6 single-footer-widget">
        <h4>Newsletter</h4>
        <p>Vous pouvez vous inscrire à la newsletter.</p>
        <div class="form-wrap" id="mc_embed_signup">
          <form
            target="_blank"
            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
            method="get"
            class="form-inline"
          >
            <input
              class="form-control"
              name="EMAIL"
              placeholder="Your Email Address"
              onfocus="this.placeholder = ''"
              onblur="this.placeholder = 'Your Email Address'"
              required=""
              type="email"
            />
            <button class="click-btn btn btn-default">
              <span>subscribe</span>
            </button>
            <div style="position: absolute; left: -5000px;">
              <input
                name="b_36c4fd991d266f23781ded980_aefe40901a"
                tabindex="-1"
                value=""
                type="text"
              />
            </div>

            <div class="info"></div>
          </form>
        </div>
      </div>
    </div>
    <div class="row footer-bottom d-flex justify-content-between">
      <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Ce site internet a était mis en place part Yanish et Thomas.<i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
      <div class="col-lg-4 col-sm-12 footer-social">
        <a href="https://fr-fr.facebook.com/pages/lyc%C3%A9e-robert-shuman-dugny/138783332978707"><i class="ti-facebook"></i></a>
        <a href="https://www.linkedin.com/authwall?trk=ripf&trkInfo=AQEox7flDVgK6wAAAXTU30Sg9G1wuydfYLa76GB2oassbBSdjOi9-W4ZjXPYF8_C316tFE1wSZJQcJXqWoZZ_TSYGc-KGAmfL2kQ0G2cJ_EJNiW2QL5Z-8o7AyjmF9l5fSLAA-I=&originalReferer=https://www.google.com/&sessionRedirect=https%3A%2F%2Ffr.linkedin.com%2Fschool%2Flyc%25C3%25A9erobertschuman%2F"><i class="ti-linkedin"></i></a>
      </div>
    </div>
  </div>
</footer>
<!--================ End footer Area  =================-->

    <!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <i class="ti-close"></i>
            </button>
            <h2>Thank you</h2>
            <p>Your message is successfully sent...</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Modals error -->

    <div id="error" class="modal modal-message fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <i class="ti-close"></i>
            </button>
            <h2>Sorry !</h2>
            <p>Something went wrong</p>
          </div>
        </div>
      </div>
    </div>
    <!--================End Contact Success and Error message Area =================-->

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
  </body>
</html>
