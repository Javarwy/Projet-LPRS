<?php
session_start();
if (isset($_SESSION['id'])) {
    include '../PHP/bdd/Bdd.php';
    $bdd = new Bdd;
    $req = $bdd->getBdd()->query('SELECT e.id_evenement, e.nom_evenement, e.type, e.description_evenement, e.adresse, e.nb_de_places-COUNT(p.REF_UTILISATEUR) as "nb_de_places", e.date_evenement, u.nom, u.prenom, u.id_utilisateur FROM evenement as e LEFT JOIN participer as p ON e.id_evenement = p.REF_EVENEMENT LEFT JOIN creer as c ON e.id_evenement = c.REF_EVENEMENT LEFT JOIN utilisateur as u ON c.REF_UTILISATEUR = u.id_utilisateur WHERE e.verification = 1 GROUP BY e.id_evenement, u.id_utilisateur ORDER BY e.date_evenement;');
    $res = $req->fetchAll();
    $evenements = [];
    foreach ($res as $evenement) {
        $id_evenement = $evenement['id_evenement'];
        if (!isset($evenements[$id_evenement])) {
            $evenements[$id_evenement] = [
                'nom_evenement' => $evenement['nom_evenement'],
                'type' => $evenement['type'],
                'description_evenement' => $evenement['description_evenement'],
                'date_evenement' => $evenement['date_evenement'],
                'adresse' => $evenement['adresse'],
                'nb_de_places' => $evenement['nb_de_places'],
                'organisateurs' => [],
                'est_organisateur' => false
            ];
        }
        $evenements[$id_evenement]['organisateurs'][] = [
            'id_utilisateur' => $evenement['id_utilisateur'],
            'nom' => $evenement['nom'],
            'prenom' => $evenement['prenom']
        ];
        if ($evenement['id_utilisateur'] == $_SESSION['id']) {
            $evenements[$id_evenement]['est_organisateur'] = true;
        }
    }
    if (isset($_SESSION['id_evenement'])) {
        unset($_SESSION['id_evenement']);
    }
}
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

    <title>LPRS - Lycée Privé Robert Schuman</title>


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
                                    <a href="annuaire_etudiant.php">Annuaire des anciens élèves</a>
                                    <a href="forum_etudiant.php">Forum de discussion</a>
                                    <a href="#">Opportunités d'emploi et de stage</a>
                                    <a href="evenement_etudiants.php">Participation des évènements</a>
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
                                <a href="../professeur/professeur.php">
                                    <button class="nav-link dropbtn">Professeur
                                    </button>
                                </a>
                                <div class="dropdown-content">
                                    <a href="../professeur/prof_profils_anciens_eleves.php">Profils des anciens élèves</a>
                                    <a href="../professeur/prof_profils_etudiants_actuels.php">Profils des étudiants actuels</a>
                                    <a href="../professeur/prof_publication_evenements.php">Publication d'événements</a>
                                    <a href="../professeur/prof_section_offres.php">Section d'offres</a>
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
                    if (isset($_GET['erreur'])) {
                        if ($_GET['erreur'] == 1){
                            ?>
                            <h7 style="color: red">Erreur lors de la suppression de votre événement. Veuillez réessayer.</h7><br><br>
                            <?php
                        } else if ($_GET['erreur'] == 2){
                            ?>
                            <h7 style="color: red">Erreur lors de la réservation de votre événement. Veuillez réessayer.</h7><br><br>
                            <?php
                        } else if ($_GET['erreur'] == 3){
                            ?>
                            <h7 style="color: red">Impossible de réserver cet événement : <b>il n'y a plus de places disponibles</b>.</h7><br><br>
                            <?php
                        } else if ($_GET['erreur'] == 4){
                            ?>
                            <h7 style="color: red">Impossible de réserver cet événement : il a lieu dans <b>moins de deux jours</b>.</h7><br><br>
                            <?php
                        } else if ($_GET['erreur'] == 5){
                            ?>
                            <h7 style="color: red">Impossible de réserver cet événement : vous avez <b>déjà réservé</b> pour cet événement.</h7><br><br>
                            <?php
                        } else if ($_GET['erreur'] == 6){
                            ?>
                            <h7 style="color: red">Erreur lors de la modification de votre événement. Veuillez réessayer.</h7><br><br>
                            <?php
                        }
                    }
                    if (isset($_GET['ok'])){
                        if ($_GET['ok'] == 1){
                        ?>
                            <h7 style="color: blue">Votre événement a bien été créé. <b>Il apparaîtra sur le tableau publiquement après vérification par un gestionnaire</b>.</h7><br><br>
                        <?php
                        } else if ($_GET['ok'] == 2){
                        ?>
                            <h7 style="color: blue">Votre événement a bien été modifié. <b>Il apparaîtra sur le tableau publiquement après re-vérification par un gestionnaire</b>.</h7><br><br>
                        <?php
                        }
                    }
                    if (isset($_SESSION['id']) && $_SESSION['role'] == "etudiant") {
                    ?>
                    <h2 style="color: #19c880">Participation à des événements</h2>
                    <br>
                    <a href="etudiant_creer_evenement.php">
                        <button type="button">Créer un événement</button>
                    </a>
                    <br><br>
                    <table border="1px" style="text-align: center; margin:auto;">
                        <thead>
                        <tr>
                            <th hidden="hidden">Id</th>
                            <th>Nom</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Date et heure</th>
                            <th>Adresse</th>
                            <th>Nombre de places restantes</th>
                            <th>Organisateur(s)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (empty($res)) {
                            ?>
                            <tr>
                                <td colspan="7">Aucun événement trouvé.</td>
                            </tr>
                            <?php
                        } else {
                            foreach($evenements as $id_evenement => $evenement){
                                ?>
                                <tr>
                                    <td><?php echo $evenement['nom_evenement'] ?></td>
                                    <td><?php echo $evenement['type'] ?></td>
                                    <td><?php echo $evenement['description_evenement'] ?></td>
                                    <td>
                                        <?php
                                            $date = new DateTime($evenement['date_evenement']);
                                            $dateString = date_format($date,'d/m/Y H:i');
                                            echo $dateString;
                                        ?>
                                    </td>
                                    <td><?php echo $evenement['adresse'] ?></td>
                                    <td><?php echo $evenement['nb_de_places'] ?></td>
                                    <td>
                                        <?php
                                        foreach($evenement['organisateurs'] as $organisateur) {
                                            echo $organisateur['nom']." ".$organisateur['prenom']."<br>";
                                        }
                                        ?>
                                    </td>
                                    <?php
                                    if ($evenement['est_organisateur']){
                                        ?>
                                        <td>
                                            <form method="post" action="etudiant_modifier_evenement.php">
                                                <input type="hidden" name="id_evenement" value="<?php echo $id_evenement ?>">
                                                <button type="submit" name="modification">Modifier</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form method="post" action="../PHP/controleur/EvenementsController.php" id="supprimer">
                                                <input type="hidden" name="id_evenement" value="<?php echo $id_evenement ?>">
                                                <button type="submit" onclick="confirmerSuppression()" name="supprimerProf">Supprimer</button>
                                            </form>
                                        </td>
                                        <?php
                                    } else {
                                        ?>
                                        <td colspan="2">
                                            <form method="post" action="../PHP/controleur/EvenementsController.php">
                                                <input type="hidden" name="id_evenement" value="<?php echo $id_evenement ?>">
                                                <input type="hidden" name="nb_de_places" value="<?php echo $evenement['nb_de_places'] ?>">
                                                <input type="hidden" name="date_evenement" value="<?php echo $evenement['date_evenement'] ?>">
                                                <input type="hidden" name="participant" value="<?php echo $_SESSION['id'] ?>">
                                                <button type="submit" name="reserverProf">Réserver</button>
                                            </form>
                                        </td>
                                        <?php
                                    }
                                    ?>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                        </tbody>
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