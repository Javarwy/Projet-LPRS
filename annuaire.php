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
              <th>Nom de la Socièté</th>
              <th>Coordonnées</th>
              <th>Email</th>
              <th>Responsable HSE</th>
              <th>Login</th>
              <th>Niveau d'Accès</th>
              <th>Modifier</th>
              <th>Supprimer</th>
          </tr>
          <?php
          $reponse = bdd->query('SELECT * FROM entreprise ORDER BY ENT_Nom');

          while($donnees = $reponse->fetch())
          {?>
              <tr>
                  <td><?php echo $donnees['ENT_Nom'];?></td>
                  <td><?php echo $donnees['ENT_Coordonnees'];?></td>
                  <td><?php echo $donnees['ENT_Mail'];?></td>
                  <td><?php echo $donnees['ENT_ADM_HSE'];?></td>
                  <td><?php echo $donnees['ENT_Login'];?></td>
                  <td><select><option value="<?php echo $donnees['ENT_Niveau'];?>"></option>
                          <option value"<?php echo $donnees['ENT_Niveau'];?>"></option>
                          <option value"<?php echo $donnees['ENT_Niveau'];?>"></option></select></td>
                 <!-- <td><a href="modifier.php?ENT_ID= <?php echo $donnees['ENT_ID']; ?>">Modifier</a></td>
                  <td><a href="supprimer.php?ENT_ID="<?php echo $donnees['ENT_ID']; ?>">Supprimer</a></td>-->
              </tr>
              <?php
          }
          $reponse->closeCursor();
          ?>
      </table>
  <!-- End Google Map -->

</body>

</html>