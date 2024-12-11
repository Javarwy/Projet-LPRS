<?php
include '../bdd/Bdd.php';
include '../model/Utilisateur.php';



if (array_key_exists("connexion",$_POST)){
    $user = new Utilisateur([
        "email" =>$_POST['email'],
        "mdp"=>$_POST['mdp'],
    ]);
    $user->connexion();
    session_start();
}

if (array_key_exists("inscription",$_POST)) {
    $user = new Utilisateur([
        "nom" => $_POST['nom'],
        "prenom" => $_POST['prenom'],
        "email" =>$_POST['email'],
        "mdp"=>$_POST['mdp'],
        "info_sup" => $_POST['info_sup'],
        "role"=>$_POST['role']
    ]);
    $user->inscription();
}

if (array_key_exists("modification",$_POST)){
    $user = new Utilisateur([
        "idUtilisateur" => $_POST['id'],
        "nom" => $_POST['nom'],
        "prenom" => $_POST['prenom'],
        "email" =>$_POST['email'],
        "mdp"=>$_POST['mdp_sure'],
        "info_sup" => $_POST['info_sup'],
        "role"=>$_POST['role'],
        "active" => 1
    ]);
    $user->modification();
}

if (array_key_exists("deconnexion", $_POST)){
    session_start();
    session_destroy();
    header("Location: ../../index.php");
}
