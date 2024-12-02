<?php
include '../bdd/Bdd.php';
include '../model/Evenement.php';
$bdd = new Bdd;
if (!isset($_POST['nomEvenement']) || !isset($_POST['type']) || !isset($_POST['descriptionEvenement']) || !isset($_POST['adresse']) || !isset($_POST['nbDePlaces']) || !isset($_POST['dateEvenement']) || !isset($_POST['orga1'])){
    header('Location: ../../etudiant/etudiant_creer_evenement.php?erreur=1');
} else {
    if (empty($_POST['nomEvenement']) || empty($_POST['type']) || empty($_POST['descriptionEvenement']) || empty($_POST['adresse']) || empty($_POST['nbDePlaces']) || empty($_POST['dateEvenement']) || empty($_POST['orga1'])){
        header('Location: ../../etudiant/etudiant_creer_evenement.php?erreur=1');
    } else {
        $evenement = new Evenement([
            'nomEvenement' => $_POST['nomEvenement'],
            'type' => $_POST['type'],
            'descriptionEvenement' => $_POST['descriptionEvenement'],
            'adresse' => $_POST['adresse'],
            'nbDePlaces' => $_POST['nbDePlaces'],
            'dateEvenement' => $_POST['dateEvenement']
        ]);
        $organisateurs = [];
        foreach ($_POST as $key => $organisateur) {
            if (strpos($key, 'orga') === 0 && !empty($organisateur)) {
                list($id, $role) = explode('-',$organisateur);
                $organisateurs[] = ['id'=>$id,'role'=>$role];
            }
        }
        $verif = $evenement->creerEvenement($organisateurs);
        if ($verif){
            header('Location: ../../etudiant/etudiant_publication_evenements.php?ok=1');
        } else {
            header('Location: ../../etudiant/etudiant_creer_evenement.php?erreur=2');
        }
    }
}