<?php
session_start();

	try 
	{
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
