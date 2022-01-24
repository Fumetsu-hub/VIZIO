<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <?php

        if($_SESSION['statut'] == "medecin")
        {
                include('./utilitaire/barre_de_navigation_medecin.php');
        }
        else
        {
                include('./utilitaire/barre_de_navigation_patient.php');
        }
        
        ?>
        
        <title>questionnaire</title>

    </head>

    <body> 
        <div class="tout">
            <div class="container">
                <div>
                <form action="./index.php" method="GET">
                    <br>Veuillez posez votre question :
                    <input class="form-control w-25 p-1" type="text" value = "" name="question">
                    <br>Veuillez proposer vos réponses :<br>
                    <li>réponse 1 : </li>
                    <li>réponse 2 : </li>
                    <li>réponse 3 : </li>
                    <li>réponse 4 : </li>
                    <li>réponse 5 : </li>
                </form>
                </div>
                <br><br><br><br>
            </div>
        </div>
    </body>
</html>