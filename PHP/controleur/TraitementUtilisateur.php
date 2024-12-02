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
    header("Location: ../../index.html");
    $user->inscription();
}

if (array_key_exists("modification",$_POST)){
    $user = new Utilisateur([
        "nom" => $_POST['nom'],
        "prenom" => $_POST['prenom'],
        "email" =>$_POST['email'],
        "mdp"=>$_POST['mdp'],
        "info_sup" => $_POST['info_sup'],
        "role"=>$_POST['role']
    ]);
    header("Location: ../../profile.html");
    $user->modification();
}
