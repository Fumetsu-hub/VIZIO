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
					break;
				case 'creer_dossier_patient':
					include("./controlleur/creer_dossier_patient.php");
					break;
				case 'modifier_dossier_patient':
					include("./controlleur/modifier_dossier_patient.php");
					break;
				case 'afficher_profil':
					include("./controlleur/afficher_profil.php");
					break;
				case 'afficher_dossier_patient':
					include("./controlleur/afficher_dossier_patient.php");
					break;
				case 'liste_dossier_patient':
					include("./controlleur/liste_dossier_patient.php");
					break;
				case 'supprimer_profil':
					include("./controlleur/supprimer_profil.php");
					break;
				case 'supprimer_patient':
					include("./controlleur/supprimer_patient.php");
					break;
				case 'ques_rep':
					include("./controlleur/ques_rep.php");
					break;
				case 'questionnaire':
					include("./controlleur/questionnaire.php");
					break;
				case 'Document' :
					include ("./controlleur/voir_docu.php");
					break;
				case 'ajouter' :
					include ("./controlleur/ajouter_docu.php");
					break;
				case 'supprimer_document':
					include ("./controlleur/supprimer_docu.php");
					break;
				case 'recherche_multicritere':
					include("./controlleur/recherche_multicritere.php");
					break;
				case 'afficher_liste_fiche':
					include("./controlleur/afficher_liste_fiche.php");
					break;
				case 'afficher_fiche_consultation':
					include("./controlleur/afficher_fiche_consultation.php");
					break;
			}
		}
	}
	catch(Exception $e)
	{
		echo 'Erreur : '. $e->getMessage();
	}
?>
