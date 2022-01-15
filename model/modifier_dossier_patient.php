<?php

include('./utilitaire/db_connexion.php');

if(isset($_SESSION['id_dossier_patient']))
{
    $id_dossier_patient = $_SESSION['id_dossier_patient'];

    //modifier les infos perso : nom ; prenom ; email ; mdp

    //modifier NOM
    if(isset($_POST['newnom']) AND !empty($_POST['newnom']) AND $_POST['newnom'])
    {
        // verification si il y a des chiffres dans le nom
        if (preg_match('/1|2|3|4|5|6|7|8|9/i', $_POST['newnom'])){$erreur_nom_modif = "Nom invalide !";unset($_POST['newnom']);}else{

        // Si le nom est valide alors :
        $new_nom = htmlspecialchars($_POST['newnom']);
        $info_patient['nom'] = $_POST['newnom'];
        $_SESSION['nom_pat'] = $_POST['newnom'];

        $update_nom = "UPDATE user SET nom = '$new_nom' WHERE id = $id_dossier_patient";
        mysqli_query($base, $update_nom) or die('Erreur : '.$update_nom.'<br />'.mysqli_error($base));

        $succes_modify_nom = "Le nom a été modifié avec succès !";
        }
    }

    //modifier PRENOM
    if(isset($_POST['newprenom']) AND !empty($_POST['newprenom']) AND $_POST['newprenom'])
    {
        // verification si il y a des chiffres dans le prenom
        if (preg_match('/1|2|3|4|5|6|7|8|9/i', $_POST['newprenom'])){$erreur_prenom_modif = "Prénom invalide !";unset($_POST['newprenom']);}else{

        // si le prenom est valide alors :
        $new_prenom = htmlspecialchars($_POST['newprenom']);
        $info_patient['prenom'] = $_POST['newprenom'];
        $_SESSION['prenom_pat'] = $_POST['newprenom'];
    
        $update_prenom = "UPDATE user SET prenom = '$new_prenom' WHERE id = $id_dossier_patient";
        mysqli_query($base, $update_prenom) or die('Erreur : '.$update_prenom.'<br />'.mysqli_error($base));
    
        $succes_modify_prenom = "Le prénom a été modifié avec succès !";
        }
    }

    //modifier MAIL
    if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'])
    {

        //Vérification si l'email est déjà utilisée
        $mail = $_POST['newmail'];
        $sql = "SELECT mail FROM user WHERE mail = '$mail'";
        $result = mysqli_query($base, $sql) or die("Erreur SQL !<br />".$sql.'<br />'.mysqli_error($base));
        $recup_mail = mysqli_fetch_array($result);
        if(!empty($recup_mail['mail'])){$erreur_email_modif = "Le mail existe deja";unset($mail);}else{
        
        // Si l'email est ok, alors :
        $new_mail = htmlspecialchars($_POST['newmail']);
        $info_patient['mail'] = $_POST['newmail'];
        $_SESSION['mail_pat'] = $_POST['newmail'];
    
        $update_mail = "UPDATE user SET mail = '$new_mail' WHERE id = $id_dossier_patient";
        mysqli_query($base, $update_mail) or die('Erreur : '.$update_mail.'<br />'.mysqli_error($base));
    
        $succes_modify_email = "L'email a été modifié avec succès !";
        }
    }

    //modifier TELEPHONE
    if(isset($_POST['newtel']) AND !empty($_POST['newtel']) AND $_POST['newtel'])
    {
        // Pas de vérification nécessaire (déjà faite automatiquement par le type="tel" du html)
        $newtel = htmlspecialchars($_POST['newtel']);
        $info_patient['tel'] = $_POST['newtel'];
        $_SESSION['tel_pat'] = $_POST['newtel'];
        
        $update_tel = "UPDATE user SET tel = '$newtel' WHERE id = $id_dossier_patient";
        mysqli_query($base, $update_tel) or die('Erreur : '.$update_tel.'<br />'.mysqli_error($base));
        
        $succes_tel_modif = "Le téléphone a été modifié avec succès !";
    }

    //modifier MDP
    if(isset($_POST['newmdp']) AND !empty($_POST['newmdp']))
    {
        if(isset($_POST['newmdp_confirm']) AND !empty($_POST['newmdp_confirm'])) // ce if sert à verifier si la perosnne a confirmé son mdp
        {
            //verification si les mdp correspondent
            if($_POST['newmdp'] != $_POST['newmdp_confirm']){$erreur_mdp_modif = "Les mots de passe ne correspondent pas !";}else{
            // si les mdp correspondent, alors :
            $new_mdp = htmlspecialchars($_POST['newmdp']);
            $info_patient['mdp'] = $_POST['newmdp'];
        
            $update_mdp = "UPDATE user SET mdp = '$new_mdp' WHERE id = $id_dossier_patient";
            mysqli_query($base, $update_mdp) or die('Erreur : '.$update_mdp.'<br />'.mysqli_error($base));
        
            $succes_modify_password = "Le mot de passe a été modifié avec succès !";
            }
        }
        else
        {
            $erreur_mdp_modif = "Veuillez confirmer le mot de passe !";
        }
    }
}
?>
