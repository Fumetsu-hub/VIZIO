<?php
session_start();

	try 
	{
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