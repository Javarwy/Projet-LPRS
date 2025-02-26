<?
include '../bdd/Bdd.php';
include '../model/Utilisateur.php';

$bdd = new Bdd;
$res_uti = $bdd->getBdd()->query('SELECT * FROM utilisateur');
$res_ev = $bdd->getBdd()->query('SELECT * FROM evenement');
$res_of = $bdd->getBdd()->query('SELECT * FROM offre');

if (isset($_POST['DeleteUtilisateur']) && isset($_POST['id_utilisateur'])) {
    $del_uti = $bdd->getBdd()->prepare('DELETE FROM utilisateur WHERE id_utilisateur = ["id_utilisateur"]');
    $del_uti->execute();
    echo "Requête exécutée avec succès !";
    header("Location: ../../admin_dashboard.php");
}

if (isset($_POST['DeleteEvenement'])) {
    $del_ev = $bdd->getBdd()->prepare('DELETE FROM evenement WHERE id_evenement = ["id_evenement"]');
    $del_ev->execute();
    echo "Requête exécutée avec succès !";
    header("Location: ../../admin_dashboard.php");
}

if (isset($_POST['DeleteOffre'])) {
    $del_of = $bdd->getBdd()->prepare('DELETE FROM offre WHERE id_offre = ["id_offre"]');
    $del_of->execute();
    echo "Requête exécutée avec succès !";
    header("Location: ../../admin_dashboard.php");
}

if (isset($_POST['ValiderUtilisateur'])) {
    $val_uti = $bdd->getBdd()->prepare('UPDATE utilisateur SET active = 1 WHERE id_utilisateur = ["id_utilisateur"]');
    $var_uti->execute();
    echo "Requête exécutée avec succès !";
    header("Location: ../../admin_dashboard.php");

}

if (isset($_POST['ValiderEvenement'])) {
    $val_ev = $bdd->getBdd()->prepare('UPDATE evenement SET verification = 1 WHERE id_offre = ["id_offre"]');
    $val_ev->execute();
    echo "Requête exécutée avec succès !";
    header("Location: ../../admin_dashboard.php");
}

?>