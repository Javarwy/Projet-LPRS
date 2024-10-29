<?php
include '../bdd/Bdd.php';
include '../model/Evenement.php';
$bdd = new Bdd;
if (!isset($_POST['nomEvenement']) || !isset($_POST['type']) || !isset($_POST['descriptionEvenement']) || !isset($_POST['adresse']) || !isset($_POST['nbDePlaces']) || !isset($_POST['dateEvenement'])){
    header('Location: ../../professeur/prof_creer_evenement.php?erreur=1');
} else {
    if (empty($_POST['nomEvenement']) || empty($_POST['type']) || empty($_POST['descriptionEvenement']) || empty($_POST['adresse']) || empty($_POST['nbDePlaces']) || empty($_POST['dateEvenement'])){
        header('Location: ../../professeur/prof_creer_evenement.php?erreur=1');
    } else {
        $evenement = new Evenement([
            'nomEvenement' => $_POST['nomEvenement'],
            'type' => $_POST['type'],
            'descriptionEvenement' => $_POST['descriptionEvenement'],
            'adresse' => $_POST['adresse'],
            'nbDePlaces' => $_POST['nbDePlaces'],
            'dateEvenement' => $_POST['dateEvenement']
        ]);
        $verif = $evenement->creerEvenement($evenement);
        if ($verif){
            header('Location: ../../professeur/prof_publication_evenements.php?ok=1');
        } else {
            header('Location: ../../professeur/prof_creer_evenement.php?erreur=2');
        }
    }
}
