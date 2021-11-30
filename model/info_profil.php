<?php

include('../db_connexion.php');


if(isset($_SESSION['id_user']))
{
    //regarde si le nom d'utilisateur est deja utilisé pour qqn d'autre
    $requser = $bdd->prepare("SELECT * FROM user WHERE id_user = ?");
    $requser->execute(array($_SESSION['id_user']));
    $info_user = $requser->fetch();

    //modifier les infos perso : nom ; pernom ; email
    if(isset($_POST['newnom']) AND !empty($_POST['newnom']) AND $_POST['newnom'] != $info_user['nom'])
    {
        $new_nom = htmlspecialchars($_POST['newnom']);
        $update_nom = $bdd->prepare("UPDATE user SET nom = ? WHERE id_user = ?");
        $update_nom->execute(array($new_nom, $_SESSION['id_user']));
        
        $succes_modify = "Vos Informations personnelles ont été modifiées avec succès !";
        header('Refresh: 5; URL=index.php?action=profil');
    }
    if(isset($_POST['newprenom']) AND !empty($_POST['newprenom']) AND $_POST['newprenom'] != $info_user['prenom'])
    {
        $new_prenom = htmlspecialchars($_POST['newprenom']);
        $update_prenom = $bdd->prepare("UPDATE user SET prenom = ? WHERE id_user = ?");
        $update_prenom->execute(array($new_prenom, $_SESSION['id_user']));
        
        $succes_modify = "Vos Informations personnelles ont été modifiées avec succès !";
        header('Refresh: 5; URL=index.php?action=profil');
    }
    if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $info_user['mail'])
    {
        $new_mail = htmlspecialchars($_POST['newmail']);
        $update_mail = $bdd->prepare("UPDATE user SET mail = ? WHERE id_user = ?");
        $update_mail->execute(array($new_mail, $_SESSION['id_user']));
        
        $succes_modify = "Vos Informations personnelles ont été modifiées avec succès !";
        header('Refresh: 5; URL=index.php?action=profil');
    }

    //modifier le mdp
    if(isset($_POST['newmdp']) AND !empty($_POST['newmdp']) AND $_POST['newmdp'] != $info_user['mdp'])
    {
        $new_mdp = sha1($_POST['newmdp']);
        $update_mdp = $bdd->prepare("UPDATE user SET mdp = ? WHERE id_user = ?");
        $update_mdp->execute(array($new_mdp, $_SESSION['id_user']));
        
        $succes_modify_password = "Votre Mot de Pass a été modifié avec succès !";
        header('Refresh: 5; URL=index.php?action=profil');
    }
}
?>
