<!DOCTYPE html>
<html>

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

  <title>Connexion - Lycée Privé Robert Schuman</title>


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

      .fade-in-text {
  animation: fadeIn 5s;
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
              <a href="connexion_global.php">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <br>
     <center>
     <b><h1>Connexion</h1></b>
     <br>
     <h5>Veuillez nous donner quelques informations supplémentaires : </h5>
       <br>
     <br>
  <div>
  <form action="PHP\controleur\TraitementUtilisateur.php" method="post" class="form_connexion">
  <h3>
   <div>
  <h3>
   Email :</h3>
   <input type="text" id="email" name="email" required minlength="3" maxlength="25" size="10" required />
   </div>
   <div>
    <br>
    <br>
    <h3>
   Mot de passe :</h3>
   <input type="password" id="pswd" name="mdp" required minlength="3" maxlength="25" size="10" required />
   </div>
   </div>
   <div>
    <br>
       <div>
           <input type="submit" value="Connexion" name="connexion">
       </div>
    <br>
   <h5>
       <small>
           <a href="oublie_mot_de_passe.php">Réinitialiser votre mot de passe</a>
       </small>
  </h5>
  </div>

  </form>

  <br>

  <div>
      Pas de compte ? Inscrivez-vous en cliquant sur le bouton ->
      <a href="inscription_global.php"><input type="button" value="Inscription"></a>
  </div>


    <!-- slider section -->
    </section>
    <!-- end slider section -->
  </div>

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