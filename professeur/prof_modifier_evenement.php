<?php
session_start();
include '../PHP/bdd/Bdd.php';
$bdd = new Bdd;
if (isset($_POST['id_evenement'])){
    $req = $bdd->getBdd()->prepare('SELECT nom_evenement, type, description_evenement, adresse, date_evenement FROM Evenement WHERE id_evenement = :id_evenement');
    $req->execute(array(
        'id_evenement' => $_POST['id_evenement']
    ));
    $res = $req->fetchAll();

    $reqParticipants = $bdd->getBdd()->prepare('SELECT u.id_utilisateur, u.nom, u.prenom, u.role, u.info_sup FROM participer as p INNER JOIN utilisateur as u ON p.REF_UTILISATEUR = u.id_utilisateur WHERE p.ref_evenement = :id_evenement');
    $reqParticipants->execute(array(
        'id_evenement' => $_POST['id_evenement']
    ));
    $resParticipants = $reqParticipants->fetchAll();
} else if (isset($_SESSION['id_evenement'])){
    $req = $bdd->getBdd()->prepare('SELECT nom_evenement, type, description_evenement, adresse, date_evenement FROM Evenement WHERE id_evenement = :id_evenement');
    $req->execute(array(
        'id_evenement' => $_SESSION['id_evenement']
    ));
    $res = $req->fetchAll();

    $reqParticipants = $bdd->getBdd()->prepare('SELECT u.id_utilisateur, u.nom, u.prenom, u.role, u.info_sup FROM participer as p INNER JOIN utilisateur as u ON p.REF_UTILISATEUR = u.id_utilisateur WHERE p.ref_evenement = :id_evenement');
    $reqParticipants->execute(array(
        'id_evenement' => $_SESSION['id_evenement']
    ));
    $resParticipants = $reqParticipants->fetchAll();
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

    <title>Professeur - Modifier un événement</title>


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

        .fade-in-text {
            animation: fadeIn 5s;
        }
    </style>

    <script>
        function afficherParticipants(){
            const afficherParticipants = document.getElementById("afficherParticipants");
            const modifParticipants = document.getElementById("modifParticipants");
            const masquerParticipants = document.getElementById("masquerParticipants");
            modifParticipants.style.display = 'block';
            modifParticipants.style.pointerEvents = 'auto';
            afficherParticipants.style.display = 'none';
            masquerParticipants.style.display = 'block';
        }

        function masquerParticipants(){
            const afficherParticipants = document.getElementById("afficherParticipants");
            const modifParticipants = document.getElementById("modifParticipants");
            const masquerParticipants = document.getElementById("masquerParticipants");
            modifParticipants.style.display = 'none';
            modifParticipants.style.pointerEvents = 'none';
            afficherParticipants.style.display = 'block';
            masquerParticipants.style.display = 'none';
        }

        function afficherInfos(){
            const afficherInfos = document.getElementById("afficherInfos");
            const modifInfos = document.getElementById("modifInfos");
            const masquerInfos = document.getElementById("masquerInfos");
            modifInfos.style.display = 'block';
            modifInfos.style.pointerEvents = 'auto';
            afficherInfos.style.display = 'none';
            masquerInfos.style.display = 'block';
        }

        function masquerInfos(){
            const afficherInfos = document.getElementById("afficherInfos");
            const modifInfos = document.getElementById("modifInfos");
            const masquerInfos = document.getElementById("masquerInfos");
            modifInfos.style.display = 'none';
            modifInfos.style.pointerEvents = 'none';
            afficherInfos.style.display = 'block';
            masquerInfos.style.display = 'none';
        }

        function confirmerRefus(){
            if(confirm("Souhaitez-vous réellement refuser la participation de cette personne à l'événement ?\n(Cette action est irréversible !)")){
                document.getElementById("gestionParticipants").submit();
            }
        }
    </script>

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
    <br>
    <center>
        <?php
            if (isset($_GET['erreur'])){
                if ($_GET['erreur'] == 1){
                ?>
                    <h7 style="color: red">Veuillez correctement remplir tous les champs ci-dessous.</h7><br><br>
                <?php
                } else if ($_GET['erreur'] == 2){
                ?>
                    <h7 style="color: red">Erreur lors de la modification de votre événement. Veuillez réessayer.</h7><br><br>
        <?php
                } else if ($_GET['erreur'] == 3){
                ?>
                    <h7 style="color: red">Erreur lors du refus de cet utilisateur. Veuillez réssayer.</h7><br><br>
                <?php
                }
            }
            if (isset($_GET['ok'])){
                if ($_GET['ok'] == 1){
                ?>
                    <h7 style="color: blue">La participation de cet utilisateur a bien été refusée.</h7><br><br>
                <?php
                }
            }
            if (isset($_SESSION['id']) && $_SESSION['role'] == "prof" && isset($_POST['id_evenement']) || isset($_SESSION['id_evenement'])){
        ?>
        <h1>Modifier un événement</h1>
        <br>
        <button id="afficherParticipants" type="button" onclick="afficherParticipants()">Afficher les participants <i class="fa fa-user" aria-hidden="true"></i></button>
        <button id="masquerParticipants" type="button" onclick="masquerParticipants()" style="display: none;">Masquer les participants <i class="fa fa-user" aria-hidden="true"></i></button>
        <div id="modifParticipants" style="display: none; pointer-events: none;">
            <br>
            <h5>Liste des participants :</h5>
            <br>
            <form method="post" action="../PHP/controleur/ModifierEvenementController.php" id="gestionParticipants">
                <table border="1px" style="text-align: center;">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Rôle</th>
                        <th>Info. sup.</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (empty($resParticipants)) {
                        ?>
                        <tr>
                            <td colspan="4">Aucun participant.</td>
                        </tr>
                        <?php
                    } else {
                    foreach($resParticipants as $participant){
                    ?>
                    <tr>
                        <td><?php echo $participant['nom'] ?></td>
                        <td><?php echo $participant['prenom'] ?></td>
                        <td><?php echo $participant['role'] ?></td>
                        <td><?php echo $participant['info_sup'] ?></td>
                        <td>
                            <input type="hidden" name="id_utilisateur" value="<?php echo $participant['id_utilisateur'] ?>">
                            <?php
                            if (isset($_POST['id_evenement'])){
                            ?>
                            <input type="hidden" name="id_evenement" value="<?php echo $_POST['id_evenement'] ?>">
                            <?php
                            } else if (isset($_SESSION['id_evenement'])){
                            ?>
                            <input type="hidden" name="id_evenement" value="<?php echo $_SESSION['id_evenement'] ?>">
                            <?php
                            }
                            ?>
                            <button type="submit" name="refuserParticipant" onclick="confirmerRefus()">Refuser</button>
                        </td>
                    </tr>
                    <?php
                    }
                    }
                    ?>
                    </tbody>
                </table>
            </form>
        </div>
        <br><br>
        <button id="afficherInfos" type="button" onclick="afficherInfos()">Modifier les informations de l'événement</button>
        <button id="masquerInfos" type="button" onclick="masquerInfos()" style="display: none;">Masquer les informations de l'événement</button>
        <div id="modifInfos" style="display: none; pointer-events: none;">
            <br>
            <h5>Veuillez renseigner les informations suivantes : </h5>
            <br>
            <form method="post" action="../PHP/controleur/ModifierEvenementController.php" id="modifier" class="form_inscription">
                <table style="text-align: center;">
                    <?php
                    foreach($res as $evenement){
                    ?>
                    <tr>
                        <td>
                            <label for="nom">Nom de l'événement :</label>
                        </td>
                        <td>
                            <input id="nom" name="nomEvenement" type="text" value="<?php echo $evenement['nom_evenement'] ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="type">Type :</label>
                        </td>
                        <td>
                            <input id="type" name="type" type="text" value="<?php echo $evenement['type'] ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="description">Description :</label>
                        </td>
                        <td>
                            <textarea id="description" name="descriptionEvenement" required="required"><?php echo $evenement['description_evenement']?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="adresse">Adresse :</label>
                        </td>
                        <td>
                            <input id="adresse" name="adresse" type="text" value="<?php echo $evenement['adresse'] ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="date_evenement">Date et heure :</label>
                        </td>
                        <td>
                            <?php
                            $datetime = date("Y-m-d\TH:i", strtotime($evenement['date_evenement']));
                            ?>
                            <input id="date_evenement" name="dateEvenement" type="datetime-local" value="<?php echo $datetime ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" name="modifierProf">Envoyer pour validation</button>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
                <?php
                if (isset($_POST['id_evenement'])){
                    ?>
                    <input type="hidden" name="id_evenement" value="<?php echo $_POST['id_evenement'] ?>">
                    <?php
                } else if (isset($_SESSION['id_evenement'])){
                    ?>
                    <input type="hidden" name="id_evenement" value="<?php echo $_SESSION['id_evenement'] ?>">
                    <?php
                }
                ?>
                <input type="hidden" name="role" value="<?php echo $_SESSION['role'] ?>">
            </form>
        </div>
        <br>
        <div>
            <br>
            <a href="prof_publication_evenements.php"><button type="button">Retour à la page des événements</button></a>
        </div>
        <?php
            } else {
        ?>
        <h1>Vous n'avez pas accès à cette page.</h1>
        <?php
        }
        ?>

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