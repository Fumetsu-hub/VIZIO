<?php
session_start();

	try 
	{
		if (!isset($_GET['action']))
		{
			include('./controlleur/login.php');
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
				case 'modifier_profil':
					include("./controlleur/modifier_profil.php");
					break;
				case 'Inscription':
					include("./controlleur/sign_up.php");
					break;
				case 'accueil':
					include("./controlleur/accueil.php");

				case 'creer_dossier_patient':
					include("./controlleur/creer_dossier_patient.php");
					break;
				case 'modifier_dossier_patient':
					include("./controlleur/modifier_dossier_patient.php");
				case 'afficher_profil':
					include("./controlleur/afficher_profil.php");
					break;
				case 'liste_dossier_patient':
					include("./controlleur/liste_dossier_patient.php");
					break;
				case 'supprimer_profil':
					include("./controlleur/supprimer_profil.php");
					break;
			}
		}
	}
	catch(Exception $e)
	{
		echo 'Erreur : '. $e->getMessage();
	}
?>
