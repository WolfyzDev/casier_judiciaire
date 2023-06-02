<?php
	try
	{
		$bdd = new PDO("mysql:host=fdb1029.awardspace.net;dbname=4322427_casier;charset=utf8", "4322427_casier", "root123123!!");
	}
	catch(PDOException $e)
	{
		die('Erreur: '.$e->getMessage());
	}
?>