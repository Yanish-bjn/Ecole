<!DOCTYPE html>
<html lang="en">
<!-- Dévut d'une session -->
<?php
session_start();
 ?>
 <!-- Fin d'une session -->

  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Lycée Robert Schuman</title>
    
    <!-- Liens style de la page  -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style2.css" />
    <link rel="stylesheet" href="css/style3.css" />
    <link rel="stylesheet" href="css/erreur.css" />


  </head>
  <SCRIPT language="JavaScript">
// Fonction permettant la gesion d'erreur //
  function cacherDiv() {
       document.getElementById("reussie").style.display = "none";
  }
  // Fonction permettant l'exportationn des données au format PDF //
  function compte()
    {
    w1 = window.open("exportation/compte_pdf.php");
    }

  function message()
    {
    w1 = window.open("exportation/message_pdf.php");
    }

  function evenement()
    {
    w1 = window.open("exportation/evenement_pdf.php");
    }
  function offre()
    {
    w1 = window.open("exportation/offre_pdf.php");
    }
  function contact()
    {
    w1 = window.open("exportation/contact_pdf.php");
    }


  </SCRIPT>
  <!--================ Gestion d'erreur affiche un message  =================-->
  <?php
  ini_set('display_errors', 'off');
  if($_GET['msg'] == 1) { ?>
    <body onload="setTimeout(cacherDiv,4000);">
  <div id="reussie" class="message">
  <?php echo "Connexion réussie";
  }?>
  </div>
</body>


  <body>
    <!--================ Navbar =================-->
    <header class="header_area">
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
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav ml-auto">

                <?php
                //Si il y a une session ouverte
                if (isset($_SESSION['email'])){
                  //Si la personne est un client
                  if ($_SESSION['role'] == "client") { ?>
                    <div class="position">
                    <?php echo'Lycée Robert Schuman'?>
                    </div>

                    <li class="nav-item">
                      <a class="nav-link" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="View/contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="View/offre_emploi_client.php">Offres</a>
                    </li>
                    <li class="nav-item submenu dropdown">
                      <a href="View/evenement.php" class="nav-link dropdown-toggle"> Evénements
                      </a>
                      <ul class="dropdown-menu">
                        <li class="nav-item">
                          <a class="nav-link" href="View/evenement_etudiant.php">Etudiant</a>
                        </ul>
                    </li>
                    <li class="nav-item submenu dropdown">
                      <a href="View/messagerie.php" class="nav-link dropdown-toggle">Messagerie
                      </a>
                      <ul class="dropdown-menu">
                        <li class="nav-item">
                          <a class="nav-link" href="View/messagerie_priver.php">Messagerie privé</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="View/moncompte_client.php">Mom compte</a>
                    </li>
                    <li class="nav-item submenu dropdown">
                      <a href="View/moncompte_client.php" class="nav-link dropdown-toggle"><?php echo'Bienvenue : ', $_SESSION['prenom'];?>
                      </a>
                      <ul class="dropdown-menu">
                        <li class="nav-item">
                          <a class="nav-link" href="traitement/deconnexion.php">Déconnexion</a>
                        </li>
                      </ul>
                    </li>

                  <?php  }
                    //Sinon c'est donc un admin
                   else { ?>
                     <div class="position">
                     <?php echo'Lycée Robert Schuman'?>
                     </div>
                     <li class="nav-item">
                       <a class="nav-link" href="index.php">Accueil</a>
                     </li>
                     <li class="nav-item submenu dropdown">
                       <a class="nav-link" href="View/Contact_admin.php">Contact</a>
                       </a>
                       <ul class="dropdown-menu">
                         <li class="nav-item">
                           <a class="nav-link" href="exportation/contact.php" onClick='javascript:contact();'>Exportation</a>
                         </li>
                       </ul>
                     </li>
                     <li class="nav-item submenu dropdown">
                       <a href="View/offre_emploi.php" class="nav-link dropdown-toggle"> Offres
                       </a>
                       <ul class="dropdown-menu">
                         <li class="nav-item">
                           <a class="nav-link" href="exportation/offre.php" onClick='javascript:offre();'>Exportation</a>
                         </li>
                       </ul>
                     <li class="nav-item submenu dropdown">
                       <a href="View/evenement.php" class="nav-link dropdown-toggle"> Evénements
                       </a>
                       <ul class="dropdown-menu">
                         <li class="nav-item">
                           <a class="nav-link" href="View/evenement_admin.php">Etudiant</a>
                         </li>
                         <li class="nav-item">
                           <a class="nav-link" href="exportation/evenement.php" onClick='javascript:evenement();'>Exportation</a>
                         </li>
                       </ul>
                     </li>
                     <li class="nav-item submenu dropdown">
                       <a href="View/messagerie_admin.php" class="nav-link dropdown-toggle">Messagerie
                       </a>
                       <ul class="dropdown-menu">
                         <li class="nav-item">
                           <a class="nav-link" href="View/messagerie_priver.php">Messagerie privé</a>
                         </li>
                         <li class="nav-item">
                           <a class="nav-link" href="exportation/message.php" onClick='javascript:message();'>Exportation</a>
                         </li>
                       </ul>
                     </li>
                     <li class="nav-item submenu dropdown">
                       <a href="View/moncompte_admin.php" class="nav-link dropdown-toggle" >Mon Compte
                       </a>
                       <ul class="dropdown-menu">
                         <li class="nav-item">
                            <a class="nav-link" href="exportation/compte.php" onClick='javascript:compte();'>Exportation</a>
                         </li>
                       </ul>
                     </li>
                     <li class="nav-item submenu dropdown">
                       <a href="View/admin.php" class="nav-link dropdown-toggle"><?php echo'Bienvenue : ', $_SESSION['prenom'];?>
                       </a>
                       <ul class="dropdown-menu">
                         <li class="nav-item">
                           <a class="nav-link" href="traitement/deconnexion.php">Déconnexion</a>
                         </li>
                       </ul>
                     </li>

                <?php }
              }
              //Sinon il n'y a pas de sessions ouverte
              else{ ?>
                <div class="position">
                <?php echo'Lycée Robert Schuman'?>
                </div>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="View/contact.php">Contact</a>
                </li>
                <li class="nav-item submenu dropdown">
                  <a href="View/evenement.php" class="nav-link dropdown-toggle"> Evénements
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="View/connexion.php">Connexion</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="View/inscription.php">Inscription</a>
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

    <!--================ Image de fond sur la navbar =================-->
    <section class="home_banner_area">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center">
                <h2 class="text-uppercase mt-4 mb-5">
                  Bienvenue au Lycée Robert Schuman
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Image de fond sur la navbar =================-->

    <!--================ Présentation de l'établissement =================-->
    <section class="feature_area section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">L'établissement</h2>
              <p>
                Voici ce que propose le lycée et UFA Robert Schuman
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-student"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">La bourse scolaire</h4>
                <p>
                  Chaque élève a le droit à la bourse, faites une demande auprès du secrétariat
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-book"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Les cours</h4>
                <p>
                  Les professeurs au sein de l'établissement sont à l'écoute des élèves
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-earth"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Les diplômes</h4>
                <p>
                Tous les diplômes et certifications sont reconnu par l'état (Brevet, BEP, Baccalauréat, BTS)
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--================ Présentation des effectifs =================-->
    <div class="section_gap registration_area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="row clock_sec clockdiv" id="clockdiv">
              <div class="col-lg-12">
                <h1 class="mb-3">Inscrivez-vous</h1>
                <p>
                  On est plus de 1500 étudiants à être passer par le lycée Robert Schuman.
                  Plus d'une cinquentaines de professeurs
                </p>
              </div>
              <div class="col clockinner1 clockinner">
                <h1 class="days">1500</h1>
                <span class="smalltext">Etudiants</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="hours">56</h1>
                <span class="smalltext">professeurs</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="minutes">10</h1>
                <span class="smalltext">Salle informatique</span>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ Fin de la présentation des effectifs =================-->

    <!--================ Présentation des membres de l'établissement =================-->
    <section class="trainer_area section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Membres de l'établissements</h2>
              <p>
                Voici les membres de l'établissement
              </p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center d-flex align-items-center">
          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="img/trainer/t1.png" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Jean-Marc Fizaine</h4>
              <p class="designation">Directeur de l'établissement</p>
              <div class="mb-4">
                </div>
              <div class="align-items-center justify-content-center d-flex">
                <a href="https://www.linkedin.com/in/jean-marc-fizaine-89ba31102/"><i class="ti-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="img/trainer/t2.png" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Tristan Mattei</h4>
              <p class="designation">Professeur d'informatique</p>
              <div class="align-items-center justify-content-center d-flex">
                <a href="https://www.linkedin.com/in/tristan-mattei-90958983/"><i class="ti-linkedin"></i></a>

              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="img/trainer/t3.png" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Julie Noguez</h4>
              <p class="designation">Responsable des BTS</p>
              <div class="align-items-center justify-content-center d-flex">
              <a href="https://www.linkedin.com/in/julie-noguez-88409598/"><i class="ti-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="img/trainer/t4.png" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Yannick Capiaux</h4>
              <p class="designation">Professeur en Génie Mécanique</p>
              <div class="align-items-center justify-content-center d-flex">
                <a href="https://www.linkedin.com/in/yannick-capiaux-821900109/"><i class="ti-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Fin de la présentation des membre de l'établissement =================-->

    <!--================ Présenation des événements à venir =================-->
    <div class="events_area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3 text-white">Évenements à venir</h2>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="single_event position-relative">
              <div class="event_thumb">
                <img src="img/event/e1.jpg" alt="" />
              </div>
              <div class="event_details">
                <div class="d-flex mb-4">
                  <div class="date"><span>23</span>Mai</div>

                  <div class="time-location">
                    <p>
                      <span class="ti-time mr-2"></span> 08:30 - 17:30
                    </p>
                    <p>
                      <span class="ti-location-pin mr-2"></span> Dugny, France
                    </p>
                  </div>
                </div>
                <p>
              Venez découvrir les différentes formations au sein du lycée Robert Schuman
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="single_event position-relative">
              <div class="event_thumb">
                <img src="img/event/e2.jpg" alt="" />
              </div>
              <div class="event_details">
                <div class="d-flex mb-4">
                  <div class="date"><span>15</span>Mai</div>

                  <div class="time-location">
                    <p>
                      <span class="ti-time mr-2"></span> 08:30 - 17:30 AM
                    </p>
                    <p>
                      <span class="ti-location-pin mr-2"></span> Dugny, France
                    </p>
                  </div>
                </div>
                <p>
                  En plus du tournois de football, il y a aussi un tournoi de tennis de table avec un lot pour les gagnants
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ Fin de la présenatation des évènements =================-->

    <!--================ Présenattion des témoinages =================-->
    <div class="testimonial_area section_gap">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Témoignage</h2>
              <p>
                Les témoignages d'un ancien élève et d'un professeur
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="testi_slider owl-carousel">
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <img src="img/testimonials/t1.jpg" alt="" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>Elite Martin</h4>
                    <p>
                      Ayant été étudiant au sein de ce lycée en BTS SIO SLAM (Meilleur filière),
                      j'ai vite appris et j'ai obtenue mon BTS avec la mention très bien.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <img src="img/testimonials/t2.jpg" alt="" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>Davil Saden</h4>
                    <p>
                      Durant mes années en temps que professeurs d'informatique
                      au sein de ce lycée, j'ai pu constater qu'il y'a une bonne
                      équipe pédagogique.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ Fin de la présenation des témoinages =================-->

    <!--================ Début du footer =================-->
    <footer class="footer-area section_gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>informations</h4>
            <ul>
              <li><a href="index.php">Nous concernant</a></li>

            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Prendre contact</h4>
            <ul>
              <li><a href="View/contact.php">Contact</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Etudiant</h4>
            <ul>
              <li><a href="View/connexion.php">Connexion</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Vous inscrire</h4>
            <ul>
              <li><a href="View/inscription.php">Inscription</a></li>
            </ul>
          </div>
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

    <!-- Liens javascript -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
  </body>
</html>
