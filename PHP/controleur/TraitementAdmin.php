<?
include '../bdd/Bdd.php';
include '../model/Utilisateur.php';

$del_uti = $bdd->getBdd()->query('DELETE FROM utilisateur WHERE id_utilisateur = ["id_utilisateur"]');
$del_ev = $bdd->getBdd()->query('DELETE FROM evenement WHERE id_evenement = ["id_evenement"]');
$del_of = $bdd->getBdd()->query('DELETE FROM offre WHERE id_offre = ["id_offre"]');

$val_uti = $bdd->getBdd()->query('UPDATE utilisateur SET active = 1 WHERE id_utilisateur = ["id_utilisateur"]');
$val_ev = $bdd->getBdd()->query('UPDATE evenement SET verification = 1 WHERE id_offre = ["id_offre"]');

if (isset($_POST['DeleteUtilisateur']) && isset($_POST['id_utilisateur'])) {
    $del_uti;
    echo "Requête exécutée avec succès !";
}

if (isset($_POST['DeleteEvenement']) && isset($_POST['id_evenement'])) {
    $del_ev;
    echo "Requête exécutée avec succès !";
}

if (isset($_POST['DeleteOffre']) && isset($_POST['id_offre'])) {
    $del_of;
    echo "Requête exécutée avec succès !";
}

if (isset($_POST['ValiderUtilisateur']) && isset($_POST['id_utilisateur'])) {
    $val_uti;
    echo "Requête exécutée avec succès !";
}

if (isset($_POST['ValiderEvenement']) && isset($_POST['id_evenement'])) {
    $val_ev;
    echo "Requête exécutée avec succès !";
}

?>