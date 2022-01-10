<?php

if (empty($_SESSION['id_user']))
{
    header('Location: ./index.php');
    exit();
}

require('./model/questionnaire.php');

$title = "questionnaire";
    
require('./view/questionnaire.php');

?>