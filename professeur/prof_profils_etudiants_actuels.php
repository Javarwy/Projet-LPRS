<?php
session_start();
include '../PHP/bdd/Bdd.php';
$bdd = new Bdd;
$req = $bdd->getBdd()->query('SELECT e.REF_UTILISATEUR, u.nom, u.prenom, e.annee_promo, e.nom_promo, e.cv, e.formation FROM utilisateur as u INNER JOIN etudiant as e ON u.id_utilisateur = e.REF_UTILISATEUR;');
$res = $req->fetchAll();
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
  <link rel="icon" href="../images/fevicon/new_favicon.jpg" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Professeur - Profils des étudiants actuels</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="../css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />

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

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="../index.php">
            <span>
              <img src="../images/RobertSchuman.webp" alt="" width="150" height="100" />
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                  <li class="nav-item">
                      <a class="nav-link" href="../index.php">Accueil</a>
                  </li>
                  <li class="nav-item">
                      <div class="dropdown">
                          <button class="nav-link dropbtn">Etudiant
                          </button>
                          <div class="dropdown-content">
                              <a href="../etudiant/annuaire_etudiant.php">Annuaire des anciens élèves</a>
                              <a href="../etudiant/forum_etudiant.php">Forum de discussion</a>
                              <a href="../etudiant/opportunites_emploi_stages.php">Opportunités d'emploi et de stage</a>
                              <a href="../etudiant/evenement_etudiants.php">Participation des évènements</a>
                          </div>
                      </div>
                  </li>
                  <li class="nav-item">
                      <div class="dropdown">
                          <button class="nav-link dropbtn">Alumni
                          </button>
                          <div class="dropdown-content">
                              <a href="../Alumni/annuaire_ancien_eleve">Annuaire des anciens élèves</a>
                              <a href="../Alumni/forum_discussion_ancien_eleve">Forum de discussion</a>
                              <a href="../Alumni/Opportnuites_emploi_stages.php">Opportunités d'emploi et de stage</a>
                              <a href="../Alumni/evenement_ancien_eleve.php">Participation des évènements</a>
                          </div>
                      </div>
                  </li>
                  <li class="nav-item">
                      <div class="dropdown">
                          <button class="nav-link dropbtn">Entreprises
                          </button>
                          <div class="dropdown-content">
                              <a href="../profil_entreprise.php">Profil des entreprises</a>
                              <a href="../publication_offre.php">Publication d'offres</a>
                              <a href="../recherche_alumni.php">Profils des anciens élèves</a>
                              <a href="../index.php">Publication d'événements</a>
                          </div>
                      </div>
                  </li>
                  <li class="nav-item">
                      <div class="dropdown">
                          <a href="professeur.php">
                              <button class="nav-link dropbtn">Professeur
                              </button>
                          </a>
                          <div class="dropdown-content">
                              <a href="prof_profils_anciens_eleves.php">Profils des anciens élèves</a>
                              <a href="prof_profils_etudiants_actuels.php">Profils des étudiants actuels</a>
                              <a href="prof_publication_evenements.php">Publication d'événements</a>
                              <a href="prof_section_offres.php">Section d'offres</a>
                          </div>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="../contact.php">Contact</a>
                  </li>
              </ul>
              <div class="user_optio_box">
                  <?php
                  if (isset($_SESSION['id'])) {
                      ?>
                      <a href="../profile.php">
                          <i class="fa fa-user" aria-hidden="true"></i>
                      </a>
                      <?php
                  } else {
                      ?>
                      <a href="../connexion_global.php">
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
  <!-- service section -->

  <section class="service_section">
    <div class="container-fluid">
      <div class="row">
          <div style="text-align: center; margin: auto;">
              <br>
              <?php
              if (isset($_SESSION['id']) && $_SESSION['role'] == "prof"){
              ?>
              <h2 style="color: #19c880">Profils des étudiants actuels</h2>
              <br>
              <h5>Annuaire des étudiants</h5>
              <table border="1px" style="text-align: center; margin:auto;">
                  <tr>
                      <th hidden="hidden">Id</th>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Année promo</th>
                      <th>Nom promo</th>
                      <th>CV</th>
                      <th>Formation</th>
                  </tr>
                  <?php
                  if (empty($res)) {
                  ?>
                      <tr>
                          <td colspan="6">Aucun étudiant trouvé.</td>
                      </tr>
                  <?php
                  } else {
                      foreach($res as $etudiant){
                  ?>
                    <tr>
                        <td hidden="hidden"><?php echo $etudiant['id'] ?></td>
                        <td><?php echo $etudiant['nom'] ?></td>
                        <td><?php echo $etudiant['prenom'] ?></td>
                        <td><?php echo $etudiant['annee_promo'] ?></td>
                        <td><?php echo $etudiant['nom_promo'] ?></td>
                        <td>
                            <?php
                            $pdfData = base64_encode($etudiant['cv']);
                            echo '<embed src="data:application/pdf;base64,'.$pdfData.'"width="300" height="400" />'
                            ?>
                        </td>
                        <td><?php echo $etudiant['formation'] ?></td>
                    </tr>
                  <?php
                      }
                  }
                  ?>
              </table>
              <?php
              } else {
              ?>
                  <h1>Vous n'avez pas accès à cette page.</h1>
              <?php
              }
              ?>
              <br>
          </div>
      </div>
    </div>
  </section>

  <!-- end service section -->

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
  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <!-- custom js -->
  <script type="text/javascript" src="../js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>