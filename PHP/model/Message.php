<?php
class Message {
    private $idMessage;
    private $canal;
    private $titre;
    private $message;
    private $date;

    public function __construct(array $donnee){
        $this->hydrate($donnee);
    }

    public function hydrate(array $donnee){
        foreach($donnee as $key => $value){
            $method = 'set'.ucfirst($key);
            if(method_exists($this,$method)){
                $this->$method($value);
            }
        }
    }
    public function creerEvenement(array $createurs) :bool {
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare('INSERT INTO evenement (nom_evenement, type, description_evenement, adresse, nb_de_places, verification, date_evenement) VALUES (:nom_evenement, :type, :description_evenement, :adresse, :nb_de_places, :verification, :date_evenement)');
        $premier = $createurs[0];
        if($premier['role'] == "prof" || $premier['role'] == "partenaire"){
            $this->setVerification(1);
        }else{
            $this->setVerification(0);
        }
        $req->execute(array(
            'canal'=>$this->getCanal(),
            'titre'=>$this->getTitre(),
            'message'=>$this->getMessage(),
            'date_message'=>$this->getDateMessage()
        ));
        $verif = $this->getMessageByName($this->getNomEvenement());
        foreach($verif as $element){
            $id_evenement = $element['id_evenement'];
        }
        if ($verif){
            $creer = $bdd->getBdd()->prepare('INSERT INTO creer VALUES (:ref_utilisateur, :ref_evenement)');
            foreach($createurs as $createur){
                $creer->execute(array(
                    'ref_utilisateur'=>$createur['id'],
                    'ref_evenement'=>$id_evenement,
                ));
            }
            return true;
        } else{
            return false;
        }
    }
    public function getIdMessage()
    {
        return $this->idMessage;
    }

    public function setIdMessage($idMessage)
    {
        $this->idMessage= $idMessage;
    }

    public function getCanal()
    {
        return $this->canal;
    }

    public function setCanal($canal)
    {
        $this->canal = $canal;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
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



    