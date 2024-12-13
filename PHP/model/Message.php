<?php
class Message
{
    private $idMessage;
    private $canal;
    private $titre;
    private $message;
    private $dateMessage;

    public function __construct(array $donnee)
    {
        $this->hydrate($donnee);
    }

    public function hydrate(array $donnee)
    {
        foreach ($donnee as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function creerMessage(array $createurs): bool
    {
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare('INSERT INTO evenement (canal, titre, message, date_message) VALUES (:canal, :titre, :message, :date_message)');
        $premier = $createurs[0];
        if ($premier['role'] == "prof" || $premier['role'] == "partenaire") {
            $this->setVerification(1);
        } else {
            $this->setVerification(0);
        }
        $req->execute(array(
            'canal' => $this->getCanal(),
            'titre' => $this->getTitre(),
            'message' => $this->getMessage(),
            'date_message' => $this->getDateMessage()
        ));
        $verif = $this->getMessageByName($this->getCanal());
        foreach ($verif as $element) {
            $id_message = $element['id_message'];
        }
        if ($verif) {
            $creer = $bdd->getBdd()->prepare('INSERT INTO creer VALUES (:ref_utilisateur, :id_message)');
            foreach ($createurs as $createur) {
                $creer->execute(array(
                    'ref_utilisateur' => $createur['id'],
                    'id_message' => $id_message,
                ));
            }
            return true;
        } else {
            return false;
        }
    }

    public function getIdMessage()
    {
        return $this->idMessage;
    }

    public function setIdMessage($idMessage)
    {
        $this->idMessage = $idMessage;
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

    public function getDateMessage()
    {
        return $this->dateMessage;
    }


    public function setDateMessage($dateMessage)
    {
        $this->message = $dateMessage;
    }


    public function getVerification()
    {
        return $this->verification;
    }

    public function setVerification($verification)
    {
        $this->verification = $verification;
    }

}





    