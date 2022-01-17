<?php

if (empty($_SESSION['id_user']))
{
    header('Location: ./index.php');
    exit();
}

$title = "upload document";

require('.\view\document_upload.php');
?>