<?php
session_start();

	try 
	{
		if (!isset($_GET['action']))
		{
			include('./controlleur/sign_up.php');
		}
		else 
		{
			switch ($_GET["action"]) {
				case  'LOGIN':
					include("./controlleur/login.php");
					break;
                case 'LOGOUT':
                    include("./controlleur/sign_out.php");
                    break;
				case 'profil':
					include("./controlleur/info_profil.php");
					break;
				case 'acceuil':
					include("./controlleur/acceuil.php");
					break;
				case 'Inscription':
					include("./controlleur/sign_up.php");
					break;
				case 'acceuil':
					include("./controlleur/acceuil.php");
					break;
			}
		}
	}
	catch(Exception $e)
	{
		echo 'Erreur : '. $e->getMessage();
	}
?>
