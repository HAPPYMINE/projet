<!-- function de connexion à BDD -->
<?php

	function connect_pdo()
	{
		$DEBUG = TRUE;					//bascule pour tests en local ou mise en ligne
		//permet de gérer les éventuelles erreurs
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		//déclare l'utilisation du jeu de caractères UTF8
		$pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES utf8';
		//on tente la connexion à BD
		if ($DEBUG){
			//connexion à la base localhost
			$login = 'www';
			$mdp = '';
			$DB = 'valdeloirechateaux';
			$server = 'localhost';
		}
		
		else{
			//conn BD hostinger
			$DB = 'u765291999_vdlc';			
			$login = 'u765291999_www';
			$server = 'mysql.hostinger.fr';
			$mdp = 'C@Sj#2017';
		}
		
		try
		{
			//Connexion à BD MySQL
			$con = new PDO('mysql:host='.$server.'; dbname='.$DB, $login,$mdp, $pdo_options) ;
		}
		//aff message si exception levée
		catch (PDOException $monexception)
		{
			echo 'Error de connection à MySQL!: <br/>'.$monexception->getMessage();
			exit();
		}
		if ($DEBUG){
			echo "Connexion à MySql réussie<br/>"; //à suppimer aprés tests
		}

		return $con;

	}

?>
	
