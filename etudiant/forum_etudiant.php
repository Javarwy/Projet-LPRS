<!DOCTYPE html>
<html>

<?php
include '../PHP/bdd/Bdd.php';
$bdd = new Bdd;
$evenement = $bdd->getBdd()->query('SELECT * FROM message');

$res = $evenement ->fetchAll();
?>

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

    table {
        table-layout: fixed;
        width: 100%;
        border-collapse: collapse;
        border: 1px;
    }

    thead th:nth-child(1) {
        width: 30%;
    }

    thead th:nth-child(2) {
        width: 20%;
    }

    thead th:nth-child(3) {
        width: 15%;
    }

    thead th:nth-child(4) {
        width: 35%;
    }

    th,
    td {
        padding: 20px;
    }

    .button {
        background-color: #04AA6D;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
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
                    <ul class="navbar-nav">
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
    <br>
    <Br>
    <h3>Bienvenue sur notre forum</h3>
    <br>
    <center>
        <b><h1>Derniers messages</h1></b>
        <a class="nav-link" href="../ecriture_de_message.php">Rédigez un message !</a>
        <br>
        <br>
        <div class="main-block">
            <h1></h1>
            <table style="text-align: center" border="1px">
                <h5></h5>
                <table border="1px" style="text-align: center; margin:auto;">
                    <tr>
                        <th>Canal</th>
                        <th>Titre</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                    <?php
                    if (empty($res)) {
                        ?>
                        <tr>
                            <td colspan="6">Aucun message trouvé.</td>
                        </tr>
                        <?php
                    } else {
                        foreach($res as $evenement){
                            ?>
                            <form action="">
                                <tr>
                                    <td><?php echo $evenement['canal'] ?></td>
                                    <td><?php echo $evenement['titre'] ?></td>
                                    <td><?php echo $evenement['message'] ?></td>
                                    <td><?php echo $evenement['date'] ?></td>
                                    <td><input type="submit" value="Répondre" name="Answer"></form></td>

                            <td>
                                <?php

                                $reponse = $bdd->getBdd()->query('SELECT  reponse.id_reponse, reponse.contenu_reponse, reponse.date_reponse, reponse.heure_reponse, utilisateur.nom, utilisateur.prenom
                                 FROM reponse
                                 INNER JOIN utilisateur ON utilisateur.id_utilisateur = reponse.REF_UTILISATEUR');

                                $resultat = $reponse ->fetchAll();
                                ?>
                                <meta name="viewport" content="width=device-width, initial-scale=1">
                                <style>
                                    body {font-family: Arial, Helvetica, sans-serif;}

                                    /* The Modal (background) */
                                    .modal {
                                        display: none; /* Hidden by default */
                                        position: fixed; /* Stay in place */
                                        z-index: 1; /* Sit on top */
                                        padding-top: 100px; /* Location of the box */
                                        left: 0;
                                        top: 0;
                                        width: 100%; /* Full width */
                                        height: 100%; /* Full height */
                                        overflow: auto; /* Enable scroll if needed */
                                        background-color: rgb(0,0,0); /* Fallback color */
                                        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                                    }

                                    /* Modal Content */
                                    .modal-content {
                                        background-color: #fefefe;
                                        margin: auto;
                                        padding: 20px;
                                        border: 1px solid #888;
                                        width: 80%;
                                    }

                                    /* The Close Button */
                                    .close {
                                        color: #aaaaaa;
                                        float: right;
                                        font-size: 28px;
                                        font-weight: bold;
                                    }

                                    .close:hover,
                                    .close:focus {
                                        color: #000;
                                        text-decoration: none;
                                        cursor: pointer;
                                    }
                                </style>
                                </head>
                                <body>

                                <h2></h2>

                                <!-- Trigger/Open The Modal -->
                                <button id="myBtn">Voir commentaires</button>

                                <!-- The Modal -->
                                <div id="myModal" class="modal">

                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <p><table style="text-align: center" border="1px">
                                            <table border="1px" style="text-align: center; margin:auto;">
                                                <tr>
                                                    <th>Commentaire</th>
                                                    <th>Date</th>
                                                    <th>Heure</th>
                                                    <th>Nom</th>
                                                    <th>Prenom</th>
                                                </tr>
                                                <?php
                                                if (empty($resultat)) {
                                                    ?>
                                                    <tr>
                                                        <td colspan="6">Aucun message trouvé.</td>
                                                    </tr>
                                                    <?php
                                                } else {
                                                foreach($resultat as $reponse){
                                                ?>
                                                <form action="">
                                                    <tr>
                                                        <td><?php echo $reponse['contenu_reponse'] ?></td>
                                                        <td><?php echo $reponse['date_reponse'] ?></td>
                                                        <td><?php echo $reponse['heure_reponse'] ?></td>
                                                        <td><?php echo $reponse['nom'] ?></td>
                                                        <td><?php echo $reponse['prenom'] ?></td>




                                            </table>
                                        </table></p>
                                    </div>

                                </div>

                                <script>
                                    // Get the modal
                                    var modal = document.getElementById("myModal");

                                    // Get the button that opens the modal
                                    var btn = document.getElementById("myBtn");

                                    // Get the <span> element that closes the modal
                                    var span = document.getElementsByClassName("close")[0];

                                    // When the user clicks the button, open the modal
                                    btn.onclick = function() {
                                        modal.style.display = "block";
                                    }

                                    // When the user clicks on <span> (x), close the modal
                                    span.onclick = function() {
                                        modal.style.display = "none";
                                    }

                                    // When the user clicks anywhere outside of the modal, close it
                                    window.onclick = function(event) {
                                        if (event.target == modal) {
                                            modal.style.display = "none";
                                        }
                                    }
                                </script>

                            </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>



                </table>
            </table>
        </div>
        <br>
        <div>
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
<?php
}
}
?>