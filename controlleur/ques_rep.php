<?php

if (empty($_SESSION['id_user']))
{
    header('Location: ./index.php');
    exit();
}

require('./model/ques_rep.php');

$title = "ques_rep";
    
require('./view/ques_rep.php');

?>