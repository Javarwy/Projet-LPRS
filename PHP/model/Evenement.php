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

    public function creerEvenement(Evenement $evenement, $id_utilisateur) : bool {
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare('INSERT INTO evenement (nom_evenement, type, description_evenement, adresse, nb_de_places, verification, date_evenement) VALUES (:nom_evenement, :type, :description_evenement, :adresse, :nb_de_places, 0, :date_evenement)');
        $req->execute(array(
            'nom_evenement'=>$evenement->nomEvenement,
            'type'=>$evenement->type,
            'description_evenement'=>$evenement->descriptionEvenement,
            'adresse'=>$evenement->adresse,
            'nb_de_places'=>$evenement->nbDePlaces,
            'date_evenement'=>$evenement->dateEvenement
        ));
        $verif = $this->getEvenementByName($evenement->nomEvenement);
        foreach($verif as $element){
            $id_evenement = $element['id_evenement'];
        }
        if ($verif){
            $creer = $bdd->getBdd()->prepare('INSERT INTO creer VALUES (:ref_utilisateur, :ref_evenement)');
            $creer->execute(array(
               'ref_utilisateur'=>$id_utilisateur,
               'ref_evenement'=>$id_evenement,
            ));
            return true;
        } else {
            return false;
        }
    }

    public function modifierEvenement(Evenement $evenement) : bool{
        $bdd = new Bdd();
        $verif = $this->getEvenementById($evenement->idEvenement);
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
            'nom_evenement'=>$evenement->nomEvenement,
            'type'=>$evenement->type,
            'description_evenement'=>$evenement->descriptionEvenement,
            'adresse'=>$evenement->adresse,
            'nb_de_places'=>$evenement->nbDePlaces,
            'date_evenement'=>$evenement->dateEvenement,
            'id_evenement'=>$evenement->idEvenement
        ));
        if ($evenement === $old){
            return false;
        } else {
            return true;
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