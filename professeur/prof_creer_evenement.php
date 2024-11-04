<?php
session_start();
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
                                <button class="nav-link dropbtn">Professeur
                                </button>
                                <div class="dropdown-content">
                                    <a href="prof_profils_anciens_eleves.php">Profils des anciens élèves</a>
                                    <a href="prof_profils_etudiants_actuels.php">Profils des étudiants actuels</a>
                                    <a href="prof_publication_evenements.php">Publication d'événements</a>
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
                            <textarea id="description" name="descriptionEvenement" form="creer" required>
                            </textarea>
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
                        <td colspan="2">
                            <button type="submit">Envoyer pour validation</button>
                        </td>
                    </tr>
                </table>
                <input type="hidden" name="id_utilisateur" value="<?php echo $_SESSION['id'] ?>">
            </form>
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