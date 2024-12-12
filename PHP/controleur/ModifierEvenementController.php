<?php
include '../bdd/Bdd.php';
include '../model/Evenement.php';
$bdd = new Bdd;
if (array_key_exists("modifierProf", $_POST)){
    if (!isset($_POST['nomEvenement']) || !isset($_POST['type']) || !isset($_POST['descriptionEvenement']) || !isset($_POST['adresse']) || !isset($_POST['dateEvenement']) || !isset($_POST['id_evenement']) || !isset($_POST['role'])){
        header('Location: ../../professeur/prof_publication_evenements.php?erreur=6');
    } else {
        if (empty($_POST['nomEvenement']) || empty($_POST['type']) || empty($_POST['descriptionEvenement']) || empty($_POST['adresse']) || empty($_POST['dateEvenement']) || empty($_POST['id_evenement']) || empty($_POST['role'])){
            header('Location: ../../professeur/prof_publication_evenements.php?erreur=6');
        } else {
            $evenement = new Evenement([
                'nomEvenement' => $_POST['nomEvenement'],
                'type' => $_POST['type'],
                'descriptionEvenement' => $_POST['descriptionEvenement'],
                'adresse' => $_POST['adresse'],
                'dateEvenement' => $_POST['dateEvenement'],
                'idEvenement' => $_POST['id_evenement']
            ]);
            $verif = $evenement->modifierEvenement($evenement, $_POST['role']);
            if ($verif){
                header('Location: ../../professeur/prof_publication_evenements.php?ok=2');
            } else {
                session_start();
                $_SESSION['id_evenement'] = $_POST['id_evenement'];
                header('Location: ../../professeur/prof_modifier_evenement.php?erreur=2');
            }
        }
    }
}
if (array_key_exists("refuserParticipant", $_POST)){
    if (!isset($_POST['id_evenement']) || !isset($_POST['id_utilisateur'])) {
        header('Location: ../../professeur/prof_publication_evenements.php?erreur=6');
    } else {
        if (empty ($_POST['id_evenement']) || empty ($_POST['id_utilisateur'])){
            header('Location: ../../professeur/prof_publication_evenements.php?erreur=6');
        } else {
            $evenement = new Evenement([
                'idEvenement' => $_POST['id_evenement'],
            ]);
            $verif = $evenement->refuserEvenement($_POST['id_utilisateur']);
            if ($verif){
                session_start();
                $_SESSION['id_evenement'] = $_POST['id_evenement'];
                header('Location: ../../professeur/prof_modifier_evenement.php?ok=1');
            } else {
                session_start();
                $_SESSION['id_evenement'] = $_POST['id_evenement'];
                header('Location: ../../professeur/prof_modifier_evenement.php?erreur=3');
            }
        }
    }
}