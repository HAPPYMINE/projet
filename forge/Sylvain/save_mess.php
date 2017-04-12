<?php  //insertion entete et variables
	require("inc/fonctions.inc.php");
	$title = "Validation de formulaire";																																	//modifier 
	$content = "Contact valdeloirechateaux - Validation de votre message";						//modifier
	incl_entete($title, $content);
	if (!isset($_SESSION["membreid"])){
		incl_menu();
	}
	else{
		incl_menu_backoffice();
		
	}

	//var BD
	$identite = $_POST['identite'];					//identité en 1 champ ; creer fct pour tronquer nom et prénom et modifier BD
	$mail = $_POST['mail'];		
	$telephone = $_POST['telephone'];
	$categorie = $_POST['sujet'];
	$message = $_POST['message'];

	//var utilisée dans le script
	$time = time();
	$date = date('l d F Y H:i:s',$time);				//pour récupérer heure de sauvegarde du mess
	/*  DB locale
	$DB = 'valdeloirechateaux';
	$login = 'www';
	$server = 'localhost';
	*/
	//conn BD hostinger
	$DB = 'u765291999_vdlc';			//
	$login = 'u765291999_www';
	$server = 'mysql.hostinger.fr';
	$mdp = 'C@Sj#2017';
	require('inc/connexionpdo.inc.php');
	$con = connect_pdo($DB, $server, $login, $mdp);

	//******************************************************
	//	A FAIRE -> vérifier que l'utilisateur n'existe pas déjà dans la base
	//						
	//******************************************************

	//définit la req
	//insertion user
	$req0="INSERT INTO user(user_identite, user_telephone, user_mail) VALUES ('$identite', '$telephone', '$mail')  ";
	//permet d'envoyer la requête au serveur.
	$resultat0 = $con->query($req0); 

	//insert mess
	// -> insérer date serveur SQL...  (type de donnée SQL mess_date -> DATETIME)
	//$req1="INSERT INTO messages(mess_sujet, mess_contenu, mess_date) VALUES ('$categorie', '$message', NOW()) ";
	// -> insérer date serveur PHP...  (type de donnée SQL mess_date -> VARCHAR)
	//on recupère l'id de l'utilisateur venant de laisser le mess
	$req1="INSERT INTO messages(mess_sujet, mess_contenu, mess_date, mess_auteur) VALUES ('$categorie', '$message', '$date','$identite' ) "; 			/* $identite -> (SELECT user_id FROM user WHERE user_identite = $identite*/

		//permet d'envoyer la requête au serveur.
	$resultat1 = $con->query($req1); 

	//on teste si requetes ont abouti
	if ($resultat0 == null || $resultat1 == null  )
	{
		echo "Erreur d'accés à la BD...";
		print_r($con->errorInfo());		//Retourne les informations associées à l'erreur lors de la dernière opération sur BD
		die();												//->exit()
	}

	echo "Message envoyé à $date";

	$con = null;					//vider mémoire

?>

<?php 	//insertion footer
	incl_footer();
?>
<!--fichiers script externes-->
</body>
</html>
