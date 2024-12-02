<?php
include '../bdd/Bdd.php';
include '../model/Evenement.php';
$bdd = new Bdd;
if (!isset($_POST['nomEvenement']) || !isset($_POST['type']) || !isset($_POST['descriptionEvenement']) || !isset($_POST['adresse']) || !isset($_POST['nbDePlaces']) || !isset($_POST['dateEvenement']) || !isset($_POST['id_evenement'])){
    header('Location: ../../etudiant/etudiant_modifier_evenement.php?erreur=1');
} else {
    if (empty($_POST['nomEvenement']) || empty($_POST['type']) || empty($_POST['descriptionEvenement']) || empty($_POST['adresse']) || empty($_POST['nbDePlaces']) || empty($_POST['dateEvenement']) || empty($_POST['id_evenement'])){
        header('Location: ../../etudiant/etudiant_modifier_evenement.php?erreur=1');
    } else {
        $evenement = new Evenement([
            'nomEvenement' => $_POST['nomEvenement'],
            'type' => $_POST['type'],
            'descriptionEvenement' => $_POST['descriptionEvenement'],
            'adresse' => $_POST['adresse'],
            'nbDePlaces' => $_POST['nbDePlaces'],
            'dateEvenement' => $_POST['dateEvenement'],
            'idEvenement' => $_POST['id_evenement']
        ]);
        $verif = $evenement->modifierEvenement($evenement);
        if ($verif){
            header('Location: ../../etudiant/etudiant_publication_evenements.php?ok=2');
        } else {
            header('Location: ../../etudiant/etudiant_modifier_evenement.php?erreur=2');
        }
    }
}
