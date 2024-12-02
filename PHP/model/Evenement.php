<?php
class Evenement {
    private $idEvenement;
    private $nomEvenement;
    private $type;
    private $descriptionEvenement;
    private $adresse;
    private $nbDePlaces;
    private $verification;
    private $dateEvenement;

    public function __construct(array $donnee) {
        $this->hydrate($donnee);
    }

    public function hydrate(array $donnee){
        foreach($donnee as $key => $value){
            $method = 'set'.ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    public function creerEvenement(array $organisateurs) : bool {
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare('INSERT INTO evenement (nom_evenement, type, description_evenement, adresse, nb_de_places, verification, date_evenement) VALUES (:nom_evenement, :type, :description_evenement, :adresse, :nb_de_places, :verification, :date_evenement)');
        $premier = $organisateurs[0];
        if ($premier['role'] == "prof" ||  $premier['role'] == "partenaire") {
            $this->setVerification(1);
        } else {
            $this->setVerification(0);
        }
        $req->execute(array(
            'nom_evenement'=>$this->getNomEvenement(),
            'type'=>$this->getType(),
            'description_evenement'=>$this->getDescriptionEvenement(),
            'adresse'=>$this->getAdresse(),
            'nb_de_places'=>$this->getNbDePlaces(),
            'verification'=>$this->getVerification(),
            'date_evenement'=>$this->getDateEvenement()
        ));
        $verif = $this->getEvenementByName($this->getNomEvenement());
        foreach($verif as $element){
            $id_evenement = $element['id_evenement'];
        }
        if ($verif){
            $creer = $bdd->getBdd()->prepare('INSERT INTO creer VALUES (:ref_utilisateur, :ref_evenement)');
            foreach($organisateurs as $organisateur){
                $creer->execute(array(
                    'ref_utilisateur'=>$organisateur['id'],
                    'ref_evenement'=>$id_evenement,
                ));
            }
            return true;
        } else {
            return false;
        }
    }

    public function modifierEvenement(Evenement $evenement) : bool{
        $bdd = new Bdd();
        $verif = $this->getEvenementById($this->getIdEvenement());
        foreach($verif as $element){
            $old = new Evenement([
                'nomEvenement' => $element['nom_evenement'],
                'type' => $element['type'],
                'descriptionEvenement' => $element['description_evenement'],
                'adresse' => $element['adresse'],
                'nbDePlaces' => $element['nb_de_places'],
                'dateEvenement' => $element['date_evenement']
            ]);
        }
        $req = $bdd->getBdd()->prepare('UPDATE evenement SET nom_evenement = :nom_evenement, type = :type, description_evenement = :description_evenement, adresse = :adresse, nb_de_places = :nb_de_places, date_evenement = :date_evenement, verification = 0 WHERE id_evenement = :id_evenement');
        $req->execute(array(
            'nom_evenement'=>$this->getNomEvenement(),
            'type'=>$this->getType(),
            'description_evenement'=>$this->getDescriptionEvenement(),
            'adresse'=>$this->getAdresse(),
            'nb_de_places'=>$this->getNbDePlaces(),
            'date_evenement'=>$this->getDateEvenement(),
            'id_evenement'=>$this->getIdEvenement()
        ));
        if ($evenement === $old){
            return false;
        } else {
            return true;
        }
    }

    public function supprimerEvenement() : bool{
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare('DELETE FROM creer WHERE ref_evenement = :ref_evenement');
        $req->execute(array(
            'ref_evenement'=>$this->getIdEvenement()
        ));
        $req2 = $bdd->getBdd()->prepare('DELETE FROM evenement WHERE id_evenement = :id_evenement');
        $req2->execute(array(
           'id_evenement'=>$this->getIdEvenement()
        ));
        $verif = $this->getEvenementById($this->getIdEvenement());
        if (empty($verif)){
            return true;
        } else {
            return false;
        }
    }

    public function reserverEvenement($idUtilisateur) : bool{
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare('SELECT * FROM participer WHERE REF_UTILISATEUR = :ref_utilisateur AND REF_EVENEMENT = :ref_evenement');
        $req->execute(array(
            'ref_utilisateur'=>$idUtilisateur,
            'ref_evenement'=>$this->getIdEvenement()
        ));
        $res = $req->fetch();
        if (empty($res)){
            $participer = $bdd->getBdd()->prepare('INSERT INTO participer VALUES (:ref_utilisateur, :ref_evenement);');
            $participer->execute(array(
                'ref_utilisateur'=>$idUtilisateur,
                'ref_evenement'=>$this->getIdEvenement()
            ));
            return true;
        } else {
            return false;
        }
    }

    public function getEvenementById($idEvenement) : array {
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare('SELECT * FROM evenement WHERE id_evenement = :id_evenement');
        $req->execute(array(
            'id_evenement'=>$idEvenement
        ));
        return $req->fetchAll();
    }

    public function getEvenementByName($nomEvenement) : array{
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare('SELECT * FROM evenement WHERE nom_evenement = :nom_evenement');
        $req->execute(array(
            'nom_evenement'=>$nomEvenement
        ));
        return $req->fetchAll();
    }

    public function getIdEvenement()
    {
        return $this->idEvenement;
    }

    public function setIdEvenement($idEvenement)
    {
        $this->idEvenement = $idEvenement;
    }

    public function getNomEvenement()
    {
        return $this->nomEvenement;
    }

    public function setNomEvenement($nomEvenement)
    {
        $this->nomEvenement = $nomEvenement;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getDescriptionEvenement()
    {
        return $this->descriptionEvenement;
    }

    public function setDescriptionEvenement($descriptionEvenement)
    {
        $this->descriptionEvenement = $descriptionEvenement;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function getNbDePlaces()
    {
        return $this->nbDePlaces;
    }

    public function setNbDePlaces($nbDePlaces)
    {
        $this->nbDePlaces = $nbDePlaces;
    }

    public function getVerification()
    {
        return $this->verification;
    }

    public function setVerification($verification)
    {
        $this->verification = $verification;
    }

    public function getDateEvenement()
    {
        return $this->dateEvenement;
    }

    public function setDateEvenement($dateEvenement)
    {
        $this->dateEvenement = $dateEvenement;
    }

}