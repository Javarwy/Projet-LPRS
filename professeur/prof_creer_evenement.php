<?php
session_start();
if (isset($_SESSION['id'])) {
    include '../PHP/bdd/Bdd.php';
    $bdd = new Bdd;
    $req = $bdd->getBdd()->prepare('SELECT id_utilisateur, nom, prenom, role FROM utilisateur WHERE active = 1 AND role != "gestionnaire" AND id_utilisateur != :id');
    $req->execute(array(
        'id' => $_SESSION['id']
    ));
    $res = $req->fetchAll();
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

    <title>Professeur - Créer un événement</title>


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

    <script>
        let nbOrgas = 1;
        function ajoutOrga(){
            nbOrgas++;
            const selectDiv = document.createElement("div");
            selectDiv.id = "orga"+nbOrgas;

            const select = document.createElement("select");
            select.name = "orga"+nbOrgas;

            const utilisateurs = <?php echo json_encode($res) ?>;
            utilisateurs.forEach(utilisateur => {
                const option = document.createElement("option");
                option.value = `${utilisateur.id_utilisateur}-${utilisateur.role}`;
                option.text = `${utilisateur.nom} ${utilisateur.prenom}`;
                select.appendChild(option);
            });

            const retirerOrga = document.createElement("button");
            retirerOrga.textContent = "Retirer";
            retirerOrga.onclick = () => {
                selectDiv.remove();
                nbOrgas = Math.max(1, nbOrgas - 1);
            }

            selectDiv.appendChild(select);
            selectDiv.appendChild(document.createElement("small")).appendChild(retirerOrga);
            document.getElementById("organisateurs").appendChild(selectDiv);
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
                    <h7 style="color: red">Erreur lors de la création de votre événement. Veuillez réessayer.</h7><br><br>
        <?php
                }
            }
            if (isset($_SESSION['id']) && $_SESSION['role'] == "prof"){
        ?>
        <h1>Créer un événement</h1>
        <br>
        <h5>Veuillez renseigner les informations suivantes : </h5>
        <br>
        <div>
            <form method="post" action="../PHP/controleur/CreerEvenementController.php" id="creer" class="form_inscription">
                <table style="text-align: center; margin:auto;">
                    <tr>
                        <td>
                            <label for="nom">Nom de l'événement :</label>
                        </td>
                        <td>
                            <input id="nom" name="nomEvenement" type="text" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="type">Type :</label>
                        </td>
                        <td>
                            <input id="type" name="type" type="text" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="description">Description :</label>
                        </td>
                        <td>
                            <textarea id="description" name="descriptionEvenement" required="required"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="adresse">Adresse :</label>
                        </td>
                        <td>
                            <input id="adresse" name="adresse" type="text" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nb_de_places">Nombre de places :</label>
                        </td>
                        <td>
                            <input id="nb_de_places" name="nbDePlaces" type="number" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="date_evenement">Date et heure :</label>
                        </td>
                        <td>
                            <input id="date_evenement" name="dateEvenement" type="datetime-local" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="organisateurs">Organisateur(s) :</label>
                        </td>
                        <td id="organisateurs">
                            <div id="orga1">
                                <select name="orga1" readonly="">
                                    <option value="<?php echo $_SESSION['id'].'-'.$_SESSION['role'] ?>"><?php echo $_SESSION['nom']." ".$_SESSION['prenom'] ?></option>
                                </select>
                            </div>
                            <?php
                                foreach($res as $orga){

                                }
                            ?>
                        </td>
                        <td>
                            <small>
                                <button id="ajout1" type="button" onclick="ajoutOrga();">Ajouter</button>
                            </small>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" name="creerProf">Envoyer pour validation</button>
                        </td>
                    </tr>
                </table>
            </form>
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