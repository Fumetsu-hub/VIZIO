<!DOCTYPE html>
<html lang="en">

<head>
    <title>accueil</title>
</head>

<body>
<?php
include('./utilitaire/bootstrap.php');
include('./utilitaire/barre_de_navigation.php');
?>


    <br><br><br>

    <form action="./index.php" method="POST">
        <div class="topnav1">
            <form id="profil" action="./index.php" method='GET'>
                <input type="button" name="action" value="profil" />
            </form>
            
        </div>
    </form>

    <br><br>

    <form action="./index.php" method="POST">
        <div class="topnav2">
            <form id="liste patient" action="./index.php" method='GET'>
                <input type="button" name="action" value="liste patient" />
            </form>
            
        </div>
    </form>

    <br><br>

    <form action="./index.php" method="POST">
        <div class="topnav3">
            <form id="questionnaire" action="./index.php" method='GET'>
                <input type="button" name="action" value="questionnaire" />
            </form>
            
        </div>
    </form>
    <br><br>

    <form action="./index.php" method="POST">
        <div class="topnav3">
            <form id="consultation" action="./index.php" method='GET'>
                <input type="button" name="action" value="consultation" />
            </form>
            
        </div>
    </form>
</body>
</html>
