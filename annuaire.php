<?php
include 'PHP/bdd/Bdd.php';
$bdd = new Bdd;
$reponse = $bdd->getBdd()->query('SELECT etudiant.REF_UTILISATEUR as id_utilisateur, utilisateur.nom, utilisateur.prenom, utilisateur.email, utilisateur.info_sup, etudiant.annee_promo, etudiant.nom_promo, etudiant.cv, etudiant.formation
                                 FROM utilisateur
                                 INNER JOIN etudiant ON utilisateur.id_utilisateur = etudiant.REF_UTILISATEUR');

$resultat = $reponse ->fetchAll();
?>
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
          <a class="navbar-brand" href="index.html">
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
                        <button class="nav-link" href="etudiant.php">Etudiant</button>

                            <div class="dropdown-content">
                                <a href="#">Annuaire des anciens élèves</a>
                                <a href="#">Forum de discussion</a>
                                <a href="#">Opportunités d'emploi et de stage</a>
                                <a href="#">Participation à événements</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                        <button class="nav-link" href="alumni.php">Alumni</button>

                            <div class="dropdown-content">
                                <a href="#">Annuaire des anciens élèves</a>
                                <a href="#">Forum de discussion</a>
                                <a href="#">Opportunités d'emploi et de stage</a>
                                <a href="#">Participation à événements</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                        <button class="nav-link" href="entreprises.php">Entreprises</button>
                            <div class="dropdown-content">
                                <a href="#">Annuaire des anciens élèves</a>
                                <a href="#">Forum de discussion</a>
                                <a href="#">Opportunités d'emploi et de stage</a>
                                <a href="#">Participation à événements</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="nav-link dropbtn">Professeur
                            </button>
                            <div class="dropdown-content">
                                <a href="#">Profils des anciens élèves</a>
                                <a href="#">Profils des étudiants actuels</a>
                                <a href="#">Publication d'événements</a>
                                <a href="#">Section d'offres</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <div class="user_optio_box">
                    <a href="">
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
    <!-- slider section -->
      <table>
          <tr>
              <th>Nom</th>
              <th>Prenom</th>
              <th>Email</th>
              <th>Année de promo</th>
              <th>Nom de la promo</th>
              <th>CV</th>
              <th>Formation</th>
              <th>info_supplémentaire</th>
          </tr>
          <?php
          foreach($resultat as $donnees){
          ?>

           <tr>
              <td><?php echo $donnees['nom'];?></td>
              <td><?php echo $donnees['prenom'];?></td>
              <td><?php echo $donnees['email'];?></td>
              <td><?php echo $donnees['annee_promo'];?></td>
               <td><?php echo $donnees['nom_promo'];?></td>
               <td><?php echo $donnees['cv'];?></td>
               <td><?php echo $donnees['formation'];?></td>
               <td><?php echo $donnees['info_sup'];?></td>


          </tr>
          <?php
          }
          ?>


      </table>
  <!-- End Google Map -->

</body>

</html>