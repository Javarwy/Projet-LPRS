<?php
session_start();
include '../PHP/bdd/Bdd.php';
$bdd = new Bdd;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $cible_formation = $_POST['cible_formation'];
    $image = file_get_contents($_FILES['image']['tmp_name']);
    $ref_partenaire = $_SESSION['id_utilisateur'];

    $stmt = $bdd->getBdd()->prepare('INSERT INTO offre (nom, description, cible_formation, image, REF_PARTENAIRE) VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$titre, $description, $cible_formation, $image, $ref_partenaire]);

    echo "Offre créée avec succès !";
    header("Location: opportunites.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une Offre</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container mt-5">
    <h2>Créer une Nouvelle Offre</h2>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" id="titre" name="titre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="cible_formation">Formation Cible</label>
            <input type="text" id="cible_formation" name="cible_formation" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" id="image" name="image" class="form-control-file" required>
        </div>
        <button type="submit" class="btn btn-success">Créer</button>
    </form>
</div>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>

