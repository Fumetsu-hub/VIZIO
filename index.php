<?php
session_start();

	try 
	{
<<<<<<< HEAD
		if (!isset($_GET['action']))
		{
			include('./controller/login.php');
		}
		else 
		{
			switch ($_GET["action"]) {
                case '':
                    include ();
                    break;
=======
			switch ($_GET["action"]) {
				case  'accueil':
					include("conexion.php");
					break;

			}
		}
	catch(Exception $e)
	{
		echo 'Erreur : '. $e->getMessage();
	}
?>
>>>>>>> fdac2c153ad0a3b40701be02ec92373860009b7a
