<?php  session_start();
//insertion entete et variables
	require("inc/fonctions.inc.php");
	$title = "Modification des articles";																		//modifier 
	$content = "Formulaire de modiciations des articles du site";						//modifier
	incl_entete($title, $content);
	if (!isset($_SESSION["membreid"])){
		incl_menu();
	}
	else{
		incl_menu_backoffice();
	}
?>

<!--F271 : Créer en backoffice le formulaire de modification des articles (copie ecran).-->

<?php
//echo $_REQUEST['id'];			//test ok
//echo $_REQUEST['titre'];	//test ok
	$id = $_REQUEST['id'];
	$new_titre = $_REQUEST['titre'];
	$new_contenu = $_REQUEST['id'];
	//connexion à la base
	$login = 'www';
	$mdp = '';
	$DB = 'valdeloirechateaux';
	$server = 'localhost';

	$time = time();
	$date = date('l d F Y H:i:s',$time);				//pour récupérer heure de sauvegarde de l'article
	$auteur = $_SESSION["membreid"];

	require('inc/connexionpdo.inc.php');
	$con = connect_pdo($DB, $server, $login, $mdp);

	//requete (ligne de l'article selectionné (par son id))
	//$req = "SELECT art_categorie, art_titre, art_contenu, art_date, art_auteur FROM articles WHERE art_id = $id";
	
		try{
			if (isset($new_titre)){
				$req0 = "UPDATE articles SET art_titre='$new_titre', art_date = '$date', art_auteur = '$auteur' WHERE art_id = $id"; 
				// Prepare la requête
	    	$trait0 = $con->prepare($req0);
	    	// execute 
	    	$trait0->execute();
	    	// echo a message to say the UPDATE succeeded
	    	echo $trait0->rowCount() . " records UPDATED successfully";
			}
			if (isset($new_contenu)){
				$req1 = "UPDATE articles SET art_titre='$new_titre' WHERE art_id = $id"; 
				// Prepare la requête
	    	$trait1 = $con->prepare($req1);
	    	// execute 
	    	$trait1->execute();
	    	// echo a message to say the UPDATE succeeded
	    	echo $trait1->rowCount() . " records UPDATED successfully";
			}
		}
		catch(PDOException $e)
    {
    	//affichage des messages d'erreur en cas d'exception levée
    	echo $req0 . "<br>" . $e->getMessage();
    }
	

  $con = null;				//fermer connexion BD
?>







<?php 	//insertion footer
	incl_footer();
?>

<!--fichiers script externes-->
</body>
</html>

