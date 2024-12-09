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
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

    <!-- Fonts Style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome Style -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom Styles -->
    <link href="../css/style.css" rel="stylesheet" />
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
    <!-- Header Section -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="../index.php">
                    <span><img src="../images/RobertSchuman.webp" alt="" width="150" height="100" /></span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../opportunites.php">Opportunités d'emploi et de stage</a>
                        </li>
                        <!-- Add other menu items here -->
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Header Section -->

    <section class="service_section" style="text-align: center">
        <div class="container-fluid">
            <div class="row">
                <div style="text-align: center; margin:auto;">
                    <br>
                    <h2>Opportunités d'Emploi et de Stage</h2>
                    <br>
                    <table class="table table-bordered" style="text-align: center; margin:auto;">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Formation cible</th>
                            <th>Image</th>
                            <th>Partenaire</th>
                            <th>Entreprise</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (empty($res)) {
                            echo '<tr><td colspan="7">Aucune offre trouvée.</td></tr>';
                        } else {
                            foreach($res as $offre) {
                                echo '<tr>';
                                echo '<td>' . $offre['titre'] . '</td>';
                                echo '<td>' . $offre['description'] . '</td>';
                                echo '<td>' . $offre['cible_formation'] . '</td>';
                                echo '<td><img src="data:image/jpeg;base64,' . base64_encode($offre['image']) . '" width="100" height="100"></td>';
                                echo '<td>' . $offre['prenom'] . ' ' . $offre['nom'] . '</td>';
                                echo '<td>' . $offre['entreprise'] . '</td>';
                                echo '<td><a href="postuler.html" class="btn btn-primary">Postuler</a></td>';
                                echo '</tr>';
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    ```

    <section class="service_section" style="text-align: center">
        <div class="container">
            <h2 class="text-center">Opportunités d'Emploi et de Stage</h2>
            <table class="table table-bordered text-center">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Formation cible</th>
                    <th>Image</th>
                    <th>Partenaire</th>
                    <th>Entreprise</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if (empty($res)) {
                    echo '<tr><td colspan="7">Aucune offre trouvée.</td></tr>';
                } else {
                    foreach ($res as $offre) {
                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($offre['titre']) . '</td>';
                        echo '<td>' . htmlspecialchars($offre['description']) . '</td>';
                        echo '<td>' . htmlspecialchars($offre['cible_formation']) . '</td>';
                        echo '<td><img src="data:image/jpeg;base64,' . base64_encode($offre['image']) . '" width="100" height="100"></td>';
                        echo '<td>' . htmlspecialchars($offre['prenom']) . ' ' . htmlspecialchars($offre['nom']) . '</td>';
                        echo '<td>' . htmlspecialchars($offre['entreprise']) . '</td>';
                        echo '<td><a href="opportunites_emploi_de_stage_postuler.php" class="btn btn-primary">Postuler</a></td>';
                        echo '</tr>';
                    }
                }
                ?>
                </tbody>
            </table>
            <div class="text-center">
                <a href="creer_offre.php" class="btn btn-success">Créer une Offre</a>
            </div>
        </div>
    </section>

    <section class="service_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">
                    <a href="creer_offre.php" class="btn btn-success">Créer une Offre</a>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Include Bootstrap JS -->
<script src="../js/bootstrap.bundle.min.js"></script>

</body>
</html>
