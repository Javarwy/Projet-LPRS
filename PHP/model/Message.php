<?php
class Message {
    private $idMessage;
    private $canal;
    private $titre;
    private $message;
    private $date;
    private $RefUtilisateur;
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
    public function redaction(){
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare('SELECT * FROM `message` WHERE titre=:titre, message=:message, REF_UTILISATEUR=:REF_UTILISATEUR');
        $req->execute(array(
            "id_message" => $this->getIdMessage(),
            "canal" => $this->getCanal(),
            "titre" => $this->getTitre(),
            "message" => $this->getMessage(),
            "date" => $this->getDate(),
            "REF_UTILISATEUR" => $this->getRefUtilisateur(),
        ));
        $res = $req->fetch();
        if (is_array($res)) {
            header("Location: ../../forum_etudiant.php?erreur=0");
        } else {
        $req = $bdd->getBdd()->prepare('SELECT * FROM `message` WHERE titre=:titre, message=:message, REF_UTILISATEUR=:REF_UTILISATEUR');
        $req->execute(array(
            "id_message" => $this->getIdMessage(),
            "canal" => $this->getCanal(),
            "titre" => $this->getTitre(),
            "message" => $this->getMessage(),
            "date" => $this->getDate(),
            "REF_UTILISATEUR" => $this->getRefUtilisateur()
            ));
            header("Location: ../../forum_etudiant.php");
        }
    }

    /**
     * @return mixed
     */
    public function getIdMessage()
    {
        return $this->idMessage;
    }

    /**
     * @param mixed $idMessage
     */
    public function setIdMessage($idMessage)
    {
        $this->idMessage = $idMessage;
    }

    /**
     * @return mixed
     */
    public function getCanal()
    {
        return $this->canal;
    }

    /**
     * @param mixed $canal
     */
    public function setCanal($canal)
    {
        $this->canal = $canal;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getRefUtilisateur()
    {
        return $this->RefUtilisateur;
    }

    /**
     * @param mixed $RefUtilisateur
     */
    public function setRefUtilisateur($RefUtilisateur)
    {
        $this->RefUtilisateur = $RefUtilisateur;
    }

    public function getDate()
{
    return $this->date;
}




}

    