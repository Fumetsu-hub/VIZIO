<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>

    <br><br><br><br><br><br>

    <form action="./index.php" method="POST">
        <div class="topnav1">

            <form id="vizio" action="./index.php" method='GET'>
                <input type="hidden" name="action" value="vizio" />
            </form>

            <form id="profil" action="./index.php" method='GET'>
                <input type="button" name="action" value="profil" />
            </form>
            
        </div>
    </form>

    <br><br>

    <form action="./index.php" method="POST">
        <div class="topnav2">

            <form id="vizio" action="./index.php" method='GET'>
                <input type="hidden" name="action" value="vizio" />
            </form>

            <form id="liste patient" action="./index.php" method='GET'>
                <input type="button" name="action" value="liste patient" />
            </form>
            
        </div>
    </form>

    <br><br>

    <form action="./index.php" method="POST">
        <div class="topnav3">

            <form id="vizio" action="./index.php" method='GET'>
                <input type="hidden" name="action" value="vizio" />
            </form>

            <form id="questionnaire" action="./index.php" method='GET'>
                <input type="button" name="action" value="questionnaire" />
            </form>
            
        </div>
    </form>

</body>
</html>
