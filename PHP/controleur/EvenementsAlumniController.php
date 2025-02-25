<?php
include '../bdd/Bdd.php';
include '../model/Evenement.php';
$bdd = new Bdd;
if (array_key_exists("reserverAlumni",$_POST)){
    if (!isset($_POST['id_evenement']) || !isset($_POST['nb_de_places']) || !isset($_POST['date_evenement']) || !isset($_POST['participant'])){
        header('Location: ../../Alumni/evenement_ancien_eleve.php?erreur=2');
    } else {
        if (empty($_POST['id_evenement']) || empty($_POST['date_evenement']) || empty($_POST['participant'])){
            header('Location: ../../Alumni/evenement_ancien_eleve.php?erreur=2');
        } else {
            $evenement = new Evenement([
                'idEvenement' => $_POST['id_evenement'],
                'nbDePlaces' => $_POST['nb_de_places'],
                'dateEvenement' => $_POST['date_evenement']
            ]);
            if ($_POST['nb_de_places'] < 1){
                header('Location: ../../Alumni/evenement_ancien_eleve.php?erreur=3');
            } else {
                $dateEvenement = new DateTime($_POST['date_evenement']);
                $dateActuelle = new DateTime(date('Y-m-d H:i:s'));
                $difference = $dateEvenement->diff($dateActuelle);
                if ($difference->days <= 2){
                    header('Location: ../../Alumni/evenement_ancien_eleve.php?erreur=4');
                } else {
                    $verif = $evenement->reserverEvenement($_POST['participant']);
                    if ($verif){
                        header('Location: ../../Alumni/evenement_ancien_eleve.php?ok=4');
                    } else {
                        header('Location: ../../Alumni/evenement_ancien_eleve.php?erreur=5');
                    }
                }
            }
        }
    }
}
if (array_key_exists("supprimerAlumni",$_POST)){
    if (!isset($_POST['id_evenement'])) {
        header('Location: ../../Alumni/evenement_ancien_eleve.php?erreur=1');
    } else {
        if (empty($_POST['id_evenement'])) {
            header('Location: ../../Alumni/evenement_ancien_eleve.php?erreur=1');
        } else {
            $evenement = new Evenement([
                'idEvenement' => $_POST['id_evenement']
            ]);
            $verif = $evenement->supprimerEvenement();
            if ($verif){
                header('Location: ../../Alumni/evenement_ancien_eleve.php?ok=3');
            } else {
                header('Location: ../../Alumni/evenement_ancien_eleve.php?erreur=1');
            }
        }
    }
}
