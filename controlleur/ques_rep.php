<?php

if (empty($_SESSION['id_user']))
{
    header('Location: ./index.php');
    exit();
}

require('./model/ques_rep.php');

$title = "questionnaire";
    
require('./view/ques_rep.php');

?>