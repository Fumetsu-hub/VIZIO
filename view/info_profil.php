<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
<div id="all">
    <div id="container">
    
        <form action="" method="POST">
            <h1>MON COMPTE</h1>

            <br><hr><br>

            <label><b>Nom</b></label><br>
            <input type="text" placeholder="Nouveau Nom" value="<?php echo $info_user['nom']; ?>" name="newnom"><br>

            <label><b>Prénom</b></label><br>
            <input type="text" placeholder="Nouveau Prenom" value="<?php echo $info_user['prenom']; ?>" name="newprenom"><br>

            <label><b>Mail</b></label><br>
            <input type="email" placeholder="Nouveau E-Mail" value="<?php echo $info_user['mail']; ?>" name="newmail"><br>
            <?php
            if(isset($succes_modify))
            {
                echo '<div class = "succes">' . $succes_modify . '</div>';
            }
            if(isset($error_modify))
            {
                echo '<div class = "erreur">' . $error_modify . '</div>';
            }
            ?>

            <br><hr><br>

            <label><b>Mot de pass</b></label><br>
            <input type="password" placeholder="Nouveau Mot de pass" value="" name="newmdp"><br>
            <?php
            if(isset($succes_modify_password))
            {
                echo '<div class = "succes">' . $succes_modify_password . '</div>';
            }
            if(isset($error_modify_password))
            {
                echo '<div class = "erreur">' . $error_modify_password. '</div>';
            }
            ?>

            <br>

            <input type="submit" id='modify_submit' value='MODIFIER LE PROFIL' name ='action'>

        </form>
        
        <form action="" method="POST">
            <input type="submit" id='delete_submit' value='SUPPRIMER LE PROFIL' name ='delete_account'>
        </form>
    </div>
</div>
<br><br>
</body>