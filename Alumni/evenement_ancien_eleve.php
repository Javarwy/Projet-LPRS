<?php
session_start();
include '../PHP/bdd/Bdd.php';
$bdd = new Bdd;
$req = $bdd->getBdd()->query('SELECT e.id_evenement, e.nom_evenement, e.type, e.description_evenement, e.adresse, e.nb_de_places, e.date_evenement FROM evenement as e');
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
                            <a class="nav-link" href="etudiant.php">Etudiant</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="alumni.php">Alumni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="entreprises.php">Entreprises</a>
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
    <!-- service section -->

    <section class="service_section">
        <div class="container-fluid">
            <div class="row">
                <div style="text-align: center; margin: auto;">
                    <br>
                    <?php
                    if (isset($_SESSION['id']) && $_SESSION['role'] == "alumni"){
                    ?>
                    <h2 style="color: #19c880">Reservation d'evenement pour Alumni</h2>
                    <br>

                    <table border="1px" style="text-align: center; margin:auto;">
                        <tr>
                            <th hidden="hidden">Id</th>
                            <th>Nom</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>adresse</th>
                            <th>Nombre de places</th>
                            <th>Date</th>
                        </tr>
                        <?php
                        if (empty($res)) {
                            ?>
                            <tr>
                                <td colspan="6">Aucun événement trouvé.</td>
                            </tr>
                            <?php
                        } else {
                            foreach($res as $evenement){
                                ?>
                                    <tr>
                                        <td hidden="hidden"><?php echo $evenement['id_evenement'] ?></td>
                                        <td><?php echo $evenement['nom_evenement'] ?></td>
                                        <td><?php echo $evenement['type'] ?></td>
                                        <td><?php echo $evenement['description_evenement'] ?></td>
                                        <td><?php echo $evenement['adresse'] ?></td>
                                        <td><?php echo $evenement['nb_de_places'] ?></td>
                                        <td>
                                            <?php
                                                $date = new DateTime($evenement['date_evenement']);
                                                $dateString = date_format($date, 'd/m/Y H:i');
                                                echo $dateString;
                                            ?>
                                        </td>
                                        <td>
                                            <form action="" method="post">
                                            <input type="hidden" name="id_evenement" value="<?php echo $evenement['id_evenement'] ?>">
                                            <input type="hidden" name="nb_de_places" value="<?php echo $evenement['nb_de_places'] ?>">
                                            <input type="hidden" name="date_evenement" value="<?php echo $evenement['date_evenement'] ?>">
                                            <input type="hidden" name ="participant" value="<?php echo $_SESSION['id'] ?>">
                                            <input type="submit" value="Reserver" name="reserver">
                                            </form>
                                        </td>

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