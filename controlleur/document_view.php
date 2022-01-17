<?php

if (empty($_SESSION['id_user']))
{
    header('Location: ./index.php');
    exit();
}

$title = "view document";

require('.\view\document_view.php');
?>