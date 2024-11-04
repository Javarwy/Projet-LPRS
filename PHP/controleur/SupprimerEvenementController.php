<?php
include '../bdd/Bdd.php';
include '../model/Evenement.php';
$bdd = new Bdd;
if (!isset($_POST['id_evenement'])) {
    header('Location: ../../professeur/prof_publication_evenements.php?erreur=1');
} else {
    if (empty($_POST['id_evenement'])) {
        header('Location: ../../professeur/prof_publication_evenements.php?erreur=1');
    } else {
        $evenement = new Evenement([
            'idEvenement' => $_POST['id_evenement']
        ]);
        $verif = $evenement->supprimerEvenement($evenement);
        if ($verif){
            header('Location: ../../professeur/prof_publication_evenements.php?ok=3');
        } else {
            header('Location: ../../professeur/prof_publication_evenements.php?erreur=1');
        }
    }
}
