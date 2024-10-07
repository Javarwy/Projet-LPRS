<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 .0">
    <title>Annuaire Ancien Élève</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Annuaire Ancien Élève</h1>
    <nav>
        <ul>
            <li><a href="#recherche">Recherche</a></li>
            <li><a href="#promotion">Promotion</a></li>
            <li><a href="#secteur">Secteur d'activité</a></li>
        </ul>
    </nav>
</header>
<main>
    <section id="recherche">
        <h2>Recherche</h2>
        <form>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom"><br><br>
            <label for="promotion">Promotion :</label>
            <select id="promotion" name="promotion">
                <option value="">Sélectionnez une promotion</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
            </select><br><br>
            <label for="secteur">Secteur d'activité :</label>
            <select id="secteur" name="secteur">
                <option value="">Sélectionnez un secteur d'activité</option>
                <option value="informatique">Informatique</option>
                <option value="économie">Économie</option>
                <option value="droit">Droit</option>
            </select><br><br>
            <input type="submit" value="Rechercher">
        </form>
    </section>
    <section id="promotion">
        <h2>Promotion</h2>
        <ul>
            <li>2020</li>
            <li>2019</li>
            <li>2018</li>
        </ul>
    </section>
    <section id="secteur">
        <h2>Secteur d'activité</h2>
        <ul>
            <li>Informatique</li>
            <li>Économie</li>
            <li>Droit</li>
        </ul>
    </section>
</main>
<footer>
    <p>&copy; 2023 Annuaire Ancien Élève</p>
</footer>
</body>
</html>