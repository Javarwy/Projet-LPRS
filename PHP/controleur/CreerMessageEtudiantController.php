<?php
include '../bdd/Bdd.php';
include '../model/Message.php';
$bdd = new Bdd;
if (!isset($_POST['canal']) || !isset($_POST['titre']) || !isset($_POST['message']) || !isset($_POST['date_Message']) || !isset($_POST['crea1'])){
    header('Location: ../../etudiant/etudiant_creer_message.php?erreur=1');
} else {
    if (empty($_POST['canal']) || empty($_POST['titre']) || empty($_POST['message']) || empty($_POST['date_Message']) || empty($_POST['crea1'])){
        header('Location: ../../etudiant/etudiant_creer_message.php?erreur=1');
    } else {
        $message = new Message([
            'canal' => $_POST['canal'],
            'titre' => $_POST['titre'],
            'message' => $_POST['message'],
            'date_Message' => $_POST['date_Message'],

        ]);
        $createurs = [];
        foreach ($_POST as $key => $createur) {
            if (strpos($key, 'crea') === 0 && !empty($createur)) {
                list($id, $role) = explode('-',$createur);
                $createurs[] = ['id'=>$id,'role'=>$role];
            }
        }
        $verif = $message->creerMessage($createurs);
        if ($verif){
            header('Location: ../../etudiant/forum_etudiant.php?ok=1');
        } else {
            header('Location: ../../etudiant/forum_etudiant.php?erreur=2');
        }
    }
}
