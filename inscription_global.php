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

  <title>Inscription - Lycée Privé Robert Schuman</title>


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
                          <a href="Alumni/annuaire_ancien_eleve">Annuaire des anciens élèves</a>
                          <a href="Alumni/forum_discussion_ancien_eleve">Forum de discussion</a>
                          <a href="Alumni/Opportnuites_emploi_stages.php">Oportunités d'emploi et de stage</a>
                          <a href="Alumni/evenement_ancien_eleve.php">Participation des évènements</a>
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
                      <button class="nav-link dropbtn">Professeur
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
                <a class="nav-link" href="../contact.php">Contact</a>
              </li>
            </ul>
            <div class="user_optio_box">
              <a href="connexion_global.php">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <br>
     <center>
     <b><h1>Inscription</h1></b>
     <br>
     <h5>Veuillez nous donner quelques informations suplémentaires : </h5>
       <br>
     <br>
  <div>
  <form action="PHP\controleur\TraitementUtilisateur.php" method="post" class="form_inscription">
  <h3>
   Nom :</h3>
   <input type="text" id="name" name="nom" required minlength="3" maxlength="25" size="10" required />
   </div>
   <div>
   <br>
   <br>
  <h3>
  <div>
  <h3>
   Prénom :</h3>
   <input type="text" id="surname" name="prenom" required minlength="3" maxlength="25" size="10" required />
   </div>
   <div>
   <br>
   <br>
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
   <div>
    <br>
    <br>
    <h3>
   Confirmation du Mot de passe :</h3>
   <input type="password" id="pswd_sure" name="mdp" required minlength="3" maxlength="25" size="10" required />
   </div>
   <br>
   <br>
   <div>
   <h3>
   Information supplémentaires : </h3>
   <input type="text" id="sup_info" name="info_sup " required minlength="3" maxlength="60" size="50" />
   </div>
   <div>
    <br>
    <br>
    <br>
    <br>
   <h5>
  (Une vérification manuelle sera effectuée.)</h5>
  </div>
  <div>
    <br>
    <br>
    <h3>
   Avec quel fonction souhaitez vous vous inscrire ? :</h3>
   <select name="role" id="choix-role">
  <option value="">--Choisir--</option>
  <option value="eleve">En tant qu'élève</option>
  <option value="prof">En tant que professeur</option>
  <option value="alumni">En tant qu'ancien élève (ALUMNI)</option>
  <option value="entreprise">En tant qu'entreprise</option>
</select>
   </div>
   <div>
    <br>
    <br>
   <h5>
  (Une vérification manuelle sera effectuée.)</h5>
  </div>

  <div>
  <input type="submit" value="S'inscrire" name="inscription">
  </div>
  </form>

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