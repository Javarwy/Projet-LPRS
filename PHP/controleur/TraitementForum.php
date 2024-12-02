<?php
include '../bdd/Bdd.php';
include '../model/Message.php';

if (array_key_exists("send_message",$_POST)) {
    $msg = new Message([
        "canal" => $_POST['canal'],
        "titre" => $_POST['titre'],
        "message" =>$_POST['message'],
        "ref"=>$_SESSION['id_utilisateur'],
    ]);
    header("Location: ../../forum_main.php");
    $msg->redaction();
}

