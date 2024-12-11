<?php
class Utilisateur {
    private $idUtilisateur;
    private $nom;
    private $prenom;
    private $email;
    private $mdp;
    private $info_sup;
    private $role;
    private $active;

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

    public function connexion(){
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare('SELECT * FROM `utilisateur` WHERE email=:email and mdp=:mdp');
        $req->execute(array(
            "email"=>$this->getEmail(),
            "mdp"=>$this->getMdp()
        ));
        $res = $req->fetch();
        if (is_array($res)){
            $this->setIdUtilisateur($res['id_utilisateur']);
            $this->setNom($res['nom']);
            $this->setPrenom($res['prenom']);
            $this->setEmail($res['email']);
            $this->setMdp($res['mdp']);
            $this->setInfo_sup($res['info_sup']);
            $this->setRole($res['role']);
            $this->setActive($res['active']);

            session_start();

            $_SESSION["id"] = $res['id_utilisateur'];
            $_SESSION["nom"] = $res['nom'];
            $_SESSION["prenom"] = $res['prenom'];
            $_SESSION["email"] = $res['email'];
            $_SESSION["mdp"] = $res['mdp'];
            $_SESSION["info_sup"] = $res['info_sup'];
            $_SESSION["role"] = $res['role'];
            $_SESSION["active"] = $res['active'];
            header("Location: ../../profile.php");
        } else {
            header("Location: ../../index.php");
        }
    }
    public function inscription(){
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare('SELECT email FROM `utilisateur` WHERE email=:email');
        $req->execute(array(
            "email" => $this->getEmail()
        ));
        $res = $req->fetch();
        if (is_array($res)) {
            header("Location: ../../index.php?erreur=0");
        } else {
            $req = $bdd->getBdd()->prepare('INSERT INTO `utilisateur`(`nom`,`prenom`,`email`,`mdp`,`info_sup`,`role`,`active`) VALUES (:nom,:prenom,:email,:mdp,:info_sup,:role,0)');
            $req->execute(array(
                'nom' => $this->getNom(),
                'prenom' => $this->getPrenom(),
                'email' => $this->getEmail(),
                'mdp' => $this->getMdp(),
                'info_sup' => $this->getInfo_sup(),
                'role' => $this->getRole(),
            ));
            header("Location: ../../index.php");
        }
    }

    public function modification(){
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare('UPDATE `utilisateur` SET `nom`=:nom,`prenom`=:prenom,`email`=:email,`mdp`=:mdp, `info_sup`=:info_sup, `role`=:role, `active`=:active WHERE id_utilisateur =:id');
        $req->execute(array(
            'nom' => $this->getNom(),
            'prenom' => $this->getPrenom(),
            'email' => $this->getEmail(),
            'mdp' => $this->getMdp(),
            'info_sup' => $this->getInfo_sup(),
            'role' => $this->getRole(),
            'active' => $this->getActive(),
            'id' => $this->getIdUtilisateur()
        ));

        if ($req){
            session_start();
            $_SESSION['id'] = $this->getIdUtilisateur();
            $_SESSION['nom'] = $this->getNom();
            $_SESSION['prenom'] = $this->getPrenom();
            $_SESSION['email'] = $this->getEmail();
            $_SESSION['mdp'] = $this->getMdp();
            $_SESSION['info_sup'] = $this->getInfo_sup();
            $_SESSION['role'] = $this->getRole();
            $_SESSION['active'] = $this->getActive();
            header("Location: ../../profile.php?success");
        }
        else{
            header("Location: ../../profile.php?id_utilisateur=".$this->getIdUtilisateur()."&erreur");
        }
    }

    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getMdp()
    {
        return $this->mdp;
    }

    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    public function getInfo_sup()
    {
        return $this->info_sup;
    }

    public function setInfo_sup($info_sup)
    {
        $this->info_sup = $info_sup;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole ($role)
    {
        $this->role = $role;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setActive ($active)
    {
        $this->active = $active;
    }

    

}