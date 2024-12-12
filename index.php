<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon/new_favicon.jpg" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>LPRS - Lycée Privé Robert Schuman</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

  <style>
      .dropbtn {
          font-size: 16px;
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
      }
      .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
      }

      .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
      }

      .dropdown-content a:hover {
          background-color: #ddd;
      }

      .dropdown:hover .dropdown-content {
          display: block;
      }
  </style>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              <img src="images/RobertSchuman.webp" alt="" width="150" height="100" />
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Accueil</a>
              </li>
              <li class="nav-item">
                  <div class="dropdown">
                      <button class="nav-link dropbtn">Etudiant
                      </button>
                      <div class="dropdown-content">
                          <a href="etudiant/annuaire_etudiant.php">Annuaire des anciens élèves</a>
                          <a href="etudiant/forum_etudiant.php">Forum de discussion</a>
                          <a href="etudiant/opportunites_emploi_stages.php">Opportunités d'emploi et de stage</a>
                          <a href="etudiant/evenement_etudiants.php">Participation des évènements</a>
                      </div>
                  </div>
              </li>
              <li class="nav-item">
                  <div class="dropdown">
                      <button class="nav-link dropbtn">Alumni
                      </button>
                      <div class="dropdown-content">
                          <a href="Alumni/annuaire_ancien_eleve">Annuaire des anciens élèves</a>
                          <a href="Alumni/forum_discussion_ancien_eleve">Forum de discussion</a>
                          <a href="Alumni/Opportnuites_emploi_stages.php">Opportunités d'emploi et de stage</a>
                          <a href="Alumni/evenement_ancien_eleve.php">Participation des évènements</a>
                      </div>
                  </div>
              </li>
              <li class="nav-item">
                  <div class="dropdown">
                      <button class="nav-link dropbtn">Entreprises
                      </button>
                      <div class="dropdown-content">
                          <a href="profil_entreprise.php">Profil des entreprises</a>
                          <a href="publication_offre.php">Publication d'offres</a>
                          <a href="recherche_alumni.php">Profils des anciens élèves</a>
                          <a href="#">Publication d'événements</a>
                      </div>
                  </div>
              </li>
              <li class="nav-item">
                  <div class="dropdown">
                      <a href="professeur/professeur.php">
                          <button class="nav-link dropbtn">Professeur
                          </button>
                      </a>
                      <div class="dropdown-content">
                          <a href="professeur/prof_profils_anciens_eleves.php">Profils des anciens élèves</a>
                          <a href="professeur/prof_profils_etudiants_actuels.php">Profils des étudiants actuels</a>
                          <a href="professeur/prof_publication_evenements.php">Publication d'événements</a>
                          <a href="professeur/prof_section_offres.php">Section d'offres</a>
                      </div>
                  </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
            <div class="user_optio_box">
            <?php
                if (isset($_SESSION['id'])) {
            ?>
              <a href="profile.php">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <?php
                } else {
              ?>
                <a href="connexion_global.php">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </a>
              <?php
                }
              ?>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div class="slider_bg_box">
        <img src="images/slider-bg.jpg" alt="">
      </div>
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Bienvenue sur le site du
                      <br>
                      lycée et UFA Robert Schuman !
                    </h1>
                    <p>
                    </p>
                    <div class="btn-box">
                      <a href="#presentation" class="btn2">
                          Présentation
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Actualités
                    </h1>
                    <p>
                      Consultez les dernières actualités de l'établissement.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn2">
                        Voir actualités
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Événements
                    </h1>
                    <p>
                      Consultez les événements se déroulant dans l'établissement.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn2">
                        Voir événements
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Un problème ? Une question ?
                    </h1>
                    <p>
                      Accédez au formulaire de contact en cliquant sur le bouton ci-dessous.
                    </p>
                    <div class="btn-box">
                      <a href="#contact" class="btn2">
                        Contactez-nous
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
          <li data-target="#customCarousel1" data-slide-to="3"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding" id="presentation">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="detail-box">
            <h2>
              Présentation de l'école
            </h2>
            <p>
                L’établissement a été créé en 1920 par quelques ingénieurs centraliens chrétiens qui fondèrent une association pour alphabétiser des jeunes gens en difficultés : c’était la naissance de « l’Entraide Éducative ».
                <br>
                Plus tard, s’ajouteront différentes formations professionnelles pour devenir le Lycée privé Robert Schuman (Sous contrat d’association avec l'État).
            </p>
          </div>
        </div>
          <div class="col-md-8">
              <div class="detail-box">
                  <h2>
                      Formations
                  </h2>
                  <p>
                      Aujourd'hui, le lycée Robert SCHUMAN propose des formations diverses :
                  </p>
                  <ul>
                      <li><b>3<sup>e</sup> Prépa-Pro (Découverte professionnelle)</b></li>
                      <li><b>Bac Professionnel 3 ans Technicien en Réalisation de Produit Mécanique (TRPM)</b></li>
                      <li><b>Bac Professionnel 3 ans Maintenance des Équipements Industriels (MEI)</b></li>
                      <li><b>Bac Professionnel 3 ans Cybersécurité, Informatique et Réseaux, Électronique (CIEL)<i>option Télécommunications et réseaux informatiques</i></b></li>
                      <li><b>Bac Technologique STI2D <i>options SIN et ITEC</i></b></li>
                      <li><b>BTS Services Informatiques aux Organisations (SIO)</b> (Alternance uniquement la 2<sup>ème</sup> année)</li>
                      <li><b>BTS Conception des Processus de Réalisation de produits (CPRP)</b> (Contrat de professionnalisation sur les 2 ans)</li>
                      <li><b>BTS Maintenance des systèmes (MS)</b> (Contrat de professionnalisation sur les 2 ans)</li>
                  </ul>
              </div>
          </div>
          <div class="col-md-8">
              <div class="detail-box">
              <h2>
                  Mission et vision
              </h2>
              <p>
                  Soit actuellement 450 élèves, guidés par une équipe exigeante dont l’objectif est non seulement de donner une formation professionnelle et une formation générale, mais aussi une formation humaine fondée sur la ponctualité, l’assiduité, la rigueur, le respect de soi et des autres ainsi que le sens de l’effort.
              </p>
              </div>
          </div>
          <div class="img-box b1">
              <img src="images/etablissement.jpg" alt="">
          </div>
      </div>
    </div>
  </section>
  <!-- end about section -->


  <!-- product section -->

  <section class="product_section ">
    <div class="container">
      <div class="product_heading">
        <h2>
          Top Sale Watches
        </h2>
      </div>
      <div class="product_container">
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="images/w1.png" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Men's Watch
                </h6>
                <h5>
                  <span>$</span> 300
                </h5>
              </div>
              <div class="like">
                <h6>
                  Like
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Add To Cart
            </a>
          </div>
        </div>
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="images/w2.png" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Men's Watch
                </h6>
                <h5>
                  <span>$</span> 300
                </h5>
              </div>
              <div class="like">
                <h6>
                  Like
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Add To Cart
            </a>
          </div>
        </div>
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="images/w3.png" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Men's Watch
                </h6>
                <h5>
                  <span>$</span> 300
                </h5>
              </div>
              <div class="like">
                <h6>
                  Like
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Add To Cart
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end product section -->


  <!-- product section -->

  <section class="product_section ">
    <div class="container">
      <div class="product_heading">
        <h2>
          Feature Watches
        </h2>
      </div>
      <div class="product_container">
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="images/w4.png" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Men's Watch
                </h6>
                <h5>
                  <span>$</span> 300
                </h5>
              </div>
              <div class="like">
                <h6>
                  Like
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Add To Cart
            </a>
          </div>
        </div>
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="images/w5.png" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Men's Watch
                </h6>
                <h5>
                  <span>$</span> 300
                </h5>
              </div>
              <div class="like">
                <h6>
                  Like
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Add To Cart
            </a>
          </div>
        </div>
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="images/w6.png" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Men's Watch
                </h6>
                <h5>
                  <span>$</span> 300
                </h5>
              </div>
              <div class="like">
                <h6>
                  Like
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Add To Cart
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end product section -->


  <!-- product section -->

  <section class="product_section ">
    <div class="container">
      <div class="product_heading">
        <h2>
          New Arrivals
        </h2>
      </div>
      <div class="product_container">
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="images/w7.png" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Men's Watch
                </h6>
                <h5>
                  <span>$</span> 300
                </h5>
              </div>
              <div class="like">
                <h6>
                  Like
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Add To Cart
            </a>
          </div>
        </div>
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="images/w8.png" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Men's Watch
                </h6>
                <h5>
                  <span>$</span> 300
                </h5>
              </div>
              <div class="like">
                <h6>
                  Like
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Add To Cart
            </a>
          </div>
        </div>
        <div class="box">
          <div class="box-content">
            <div class="img-box">
              <img src="images/w9.png" alt="">
            </div>
            <div class="detail-box">
              <div class="text">
                <h6>
                  Men's Watch
                </h6>
                <h5>
                  <span>$</span> 300
                </h5>
              </div>
              <div class="like">
                <h6>
                  Like
                </h6>
                <div class="star_container">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Add To Cart
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end product section -->

  <!-- contact section -->
  <section class="contact_section layout_padding" id="contact">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contactez-nous
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="mail.php" method="post">
              <div>
                <input type="text" placeholder="Nom" name="nom" />
              </div>
              <div>
                <input type="text" placeholder="Prénom" name="prenom" />
              </div>
              <div>
                  <input type="email" placeholder="E-mail" name="email" />
              </div>
              <div>
                <select name="role" style="">
                  <option value="" disabled selected>Rôle</option>
                  <option value="eleve">Étudiant</option>
                  <option value="partenaire">Partenaire</option>
                  <option value="alumni">Alumni</option>
                  <option value="prof">Professeur</option>
                  <option value="autre">Autre</option>
                </select>
              </div>
              <div>
                 <input type="text" placeholder="Sujet" name="sujet" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" name="message" />
              </div>
              <div class="btn_box">
                <button type="submit">
                  Envoyer
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="map_container">
            <div class="map">
              <div id="googleMap">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>