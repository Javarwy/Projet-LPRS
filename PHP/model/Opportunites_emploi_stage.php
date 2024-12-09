<?php
class OpportunitesEmploiStage {
    private $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:host=localhost;dbname=projet_lprs;charset=utf8", "root", "");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getAllOpportunites() {
        $stmt = $this->pdo->query('SELECT o.id_offre, o.nom as titre, o.description, o.cible_formation, o.image, u.nom, u.prenom, e.nom as entreprise
                                    FROM offre as o 
                                    INNER JOIN partenaire as p ON o.REF_PARTENAIRE = p.REF_UTILISATEUR
                                    INNER JOIN utilisateur as u ON p.REF_UTILISATEUR = u.id_utilisateur
                                    INNER JOIN entreprise as e ON p.REF_ENTREPRISE = e.id_entreprise');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>

