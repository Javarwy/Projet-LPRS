<?php
session_start();
include '../PHP/bdd/Bdd.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_offre = intval($_POST['id_offre']);
    $id_utilisateur = $_SESSION['id_utilisateur'] ?? null;

    if (!$id_utilisateur) {
        echo "Veuillez vous connecter pour postuler.";
        exit;
    }

    try {
        $bdd = new Bdd();
        $pdo = $bdd->getBdd();

        // Insérer la postulation
        $stmt = $pdo->prepare("INSERT INTO postulation (id_offre, id_utilisateur) VALUES (:id_offre, :id_utilisateur)");
        $stmt->execute([
            ':id_offre' => $id_offre,
            ':id_utilisateur' => $id_utilisateur,
        ]);

        echo "Votre postulation a été enregistrée avec succès.";
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
} else {
    echo "Accès non autorisé.";
}
?>

