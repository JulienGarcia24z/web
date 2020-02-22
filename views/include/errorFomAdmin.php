<?php
include_once "function/connexion.php";

$co = connexion();
$pseudo = $co['pseudo'];
$motDepass = $co['mdp'];

if(!empty($_POST) ){

    extract( $_POST);
    $msg = [];
    
    if(empty($nomFa)){
        $msg['nomFa'] = "Le login est requis";
    }
    if(empty($mdpFa)){
        $msg['mdpFa'] = "Un mot de passe est requis ";

    }else{
        if($pseudo === $nomFa & ($motDepass === $mdpFa)){
            session_start();
          header('Location:index.php?page=member');
        }else {
            $msg['mdpFa'] = "le nom ou le mot de passe est incorrect";
        }
    }
}
?>
