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

    public function creerEvenement(Evenement $evenement) : bool {
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
        if ($verif){
            return true;
        } else {
            return false;
        }
    }

    public function getEvenementByName($nomEvenement) : bool{
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare('SELECT nom_evenement FROM evenement WHERE nom_evenement = :nom_evenement');
        $req->execute(array(
            'nom_evenement'=>$nomEvenement
        ));
        if ($req->rowCount() > 0){
            return true;
        } else {
            return false;
        }
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