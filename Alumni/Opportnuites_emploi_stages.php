<?php
session_start();
include '../PHP/bdd/Bdd.php';
$bdd = new Bdd;
$req = $bdd->getBdd()->query('SELECT o.nom as titre, o.description, o.cible_formation, o.image, u.nom, u.prenom, e.nom as entreprise FROM offre as o INNER JOIN partenaire as p ON o.REF_PARTENAIRE = p.REF_UTILISATEUR INNER JOIN utilisateur as u ON p.REF_UTILISATEUR = u.id_utilisateur INNER JOIN entreprise as e ON p.REF_ENTREPRISE = e.id_entreprise;');
$res = $req->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opportunités d'Emploi et de Stage</title>
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
                            <div class="dropdown-content">
                                <a href="#">Annuaire des anciens élèves</a>
                                <a href="#">Forum de discussion</a>
                                <a href="#">Oportunités d'emploi et de stage</a>
                                <a href="#">Participation des évènements</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="nav-link dropbtn">Etudiant
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
                            <div class="dropdown">
                                <button class="nav-link dropbtn">Alumni
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
                            <div class="dropdown">
                                <button class="nav-link dropbtn">Entreprise
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
                            <div class="dropdown">
                                <a href="../professeur/professeur.php">
                                    <button class="nav-link dropbtn">Professeur
                                    </button>
                                </a>
                                <div class="dropdown-content">
                                    <a href="../professeur/prof_profils_anciens_eleves.php">Profils des anciens élèves</a>
                                    <a href="../professeur/prof_profils_etudiants_actuels.php">Profils des étudiants actuels</a>
                                    <a href="../professeur/prof_publication_evenements.php">Publication d'événements</a>
                                    <a href="#">Section d'offres</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../contact.php">Contact</a>
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
    <section class="service_section" style="text-align: center">
        <div class="container-fluid">
            <div class="row">
                <div style="text-align: center; margin:auto;">
                    <br>
                    <h2>Opportunités d'Emploi et de Stage</h2>
                    <br>
                    <table border="1px" style="text-align: center; margin:auto;">
                        <tr>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Formation cible</th>
                            <th>Image</th>
                            <th>Partenaire</th>
                            <th>Entreprise</th>
                        </tr>
                        <?php
                        if (empty($res)) {
                        ?>
                        <tr>
                            <td colspan="6">Aucune offre trouvée.</td>
                        </tr>
                        <?php
                        } else {
                            foreach($res as $offre) {
                        ?>
                        <tr>
                            <td><?php echo $offre['titre'] ?></td>
                            <td><?php echo $offre['description'] ?></td>
                            <td><?php echo $offre['cible_formation'] ?></td>
                            <td>
                                <?php
                                $pdfData = base64_encode($offre['image']);
                                echo '<embed src="data:application/pdf;base64,'.$pdfData.'"width=100" height="100" />';
                                ?>
                            </td>
                            <td><?php echo $offre['prenom'].' '.$offre['nom'] ?></td>
                            <td><?php echo $offre['entreprise'] ?></td>
                            <td><a href="postuler.html" class="apply-button">Postuler</a></td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </section>

</body>
</html>

