<?php
session_start();

	try 
	{
			switch ($_GET["action"]) {
				case  'LOGIN':
					include("/controlleur/conexion.php");
					break;

			}
		}
	catch(Exception $e)
	{
		echo 'Erreur : '. $e->getMessage();
	}
?>
