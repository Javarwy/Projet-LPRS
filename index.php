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
          <a class="navbar-brand" href="../index.php">
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
                <a class="nav-link" href="../index.php">Accueil</a>
                <div class="dropdown-content">
                          <a href="Alumni/annuaire_ancien_eleve">Annuaire des anciens élèves</a>
                          <a href="Alumni\forum_discussion_ancien_eleve">Forum de discussion</a>
                          <a href="Alumni\Opportnuites_emploi_stages.php">Oportunités d'emploi et de stage</a>
                          <a href="Alumni\evenement_ancien_eleve.php">Participation des évènements</a>
                      </div>
              </li>
              <li class="nav-item">
                  <div class="dropdown">
                      <button class="nav-link dropbtn">Etudiant
                      </button>
                      <div class="dropdown-content">
                          <a href="etudiant/annuaire_ancien_eleve">Annuaire des anciens élèves</a>
                          <a href="etudiant/forum_discussion_ancien_eleve">Forum de discussion</a>
                          <a href="etudiant/Opportnuites_emploi_stages.php">Oportunités d'emploi et de stage</a>
                          <a href="etudiant/etudiant_publication_evenements.php">Participation des évènements</a>
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
                          <a href="Alumni/Opportnuites_emploi_stages.php">Oportunités d'emploi et de stage</a>
                          <a href="Alumni/evenement_ancien_eleve.php">Participation des évènements</a>
                      </div>
                  </div>
              </li>
              <li class="nav-item">
                  <div class="dropdown">
                      <button class="nav-link dropbtn">Entreprise
                      </button>
                      <div class="dropdown-content">
                          <a href="Alumni/annuaire_ancien_eleve">Annuaire des anciens élèves</a>
                          <a href="Alumni/forum_discussion_ancien_eleve">Forum de discussion</a>
                          <a href="Alumni/Opportnuites_emploi_stages.php">Oportunités d'emploi et de stage</a>
                          <a href="Alumni/evenement_ancien_eleve.php">Participation des évènements</a>
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
                          <a href="#">Section d'offres</a>
                      </div>
                  </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../contact.php">Contact</a>
              </li>
            </ul>
            <div class="user_optio_box">
              <a href="inscription_global.php">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              </a>
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
                      Stylish Watches
                    </h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus quidem maiores perspiciatis, illo maxime voluptatem a itaque suscipit.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
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
                      Stylish Watches
                    </h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus quidem maiores perspiciatis, illo maxime voluptatem a itaque suscipit.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
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
                      Stylish Watches
                    </h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus quidem maiores perspiciatis, illo maxime voluptatem a itaque suscipit.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
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
                      Stylish Watches
                    </h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus quidem maiores perspiciatis, illo maxime voluptatem a itaque suscipit.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
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
                      Stylish Watches
                    </h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus quidem maiores perspiciatis, illo maxime voluptatem a itaque suscipit.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
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
          <li data-target="#customCarousel1" data-slide-to="4"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- service section -->

  <section class="service_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="images/feature-1.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Fast Delivery
              </h5>
              <p>
                variations of passages of Lorem Ipsum available
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="images/feature-2.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Free Shiping
              </h5>
              <p>
                variations of passages of Lorem Ipsum available
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="images/feature-3.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Best Quality
              </h5>
              <p>
                variations of passages of Lorem Ipsum available
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="images/feature-4.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                24x7 Customer support
              </h5>
              <p>
                variations of passages of Lorem Ipsum available
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->


  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="img_container">
            <div class="img-box b1">
              <img src="images/a-1.jpg" alt="">
            </div>
            <div class="img-box b2">
              <img src="images/a-2.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h2>
              About Our Shop
            </h2>
            <p>
              There are many variations of passages of Lorem Ipsum
              There are many variations of
              passages of Lorem Ipsum
            </p>
            <a href="">
              Read More
            </a>
          </div>
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
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


  <!-- client section -->
  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Testimonial
        </h2>
      </div>
    </div>
    <div id="customCarousel2" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Morojink
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore
                      et
                      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                      dolore eu fugia
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Morojink
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore
                      et
                      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                      dolore eu fugia
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Morojink
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore
                      et
                      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                      dolore eu fugia
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#customCarousel2" data-slide-to="0" class="active"></li>
        <li data-target="#customCarousel2" data-slide-to="1"></li>
        <li data-target="#customCarousel2" data-slide-to="2"></li>
      </ol>
    </div>
  </section>
  <!-- end client section -->


  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="info_logo">
        <h2>
          HandTime
        </h2>
      </div>
      <div class="row">

        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              About Shop
            </h5>
            <div>
              <div class="img-box">
                <img src="images/location-white.png" width="18px" alt="">
              </div>
              <p>
                Address
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/telephone-white.png" width="12px" alt="">
              </div>
              <p>
                +01 1234567890
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/envelope-white.png" width="18px" alt="">
              </div>
              <p>
                demo@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Informations
            </h5>
            <p>
              ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info_insta">
            <h5>
              Instagram
            </h5>
            <div class="insta_container">
              <div class="row m-0">
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="images/w1.png" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="images/w2.png" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="images/w3.png" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="images/w4.png" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="images/w5.png" alt="">
                    </div>
                  </a>
                </div>
                <div class="col-4 px-0">
                  <a href="">
                    <div class="insta-box b-1">
                      <img src="images/w6.png" alt="">
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <img src="images/fb.png" alt="">
              </a>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
              <a href="">
                <img src="images/youtube.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

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