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
<!-- Page appelée par le formulaire -->

<?php
	$id = $_REQUEST['id'];											//$_POST HS
	$new_titre = addslashes($_REQUEST['titre']);			//ajoute automatiquement les échapp \ pour le guillemets...
	$new_contenu = addslashes($_REQUEST['contenu']);

	$time = time();
	$date = date('l d F Y H:i:s',$time);				//pour récupérer heure de sauvegarde de l'article
	$auteur = $_SESSION["membreid"];						//le gestionnaire connecté est l'auteur
	//connexion à la base
	require('inc/connexionpdo.inc.php');
	$con = connect_pdo();
	//on récupére le contenu de l'article en BD
	//(car pas possible avec attrib placeholder de récupérer ancien texte depuis le textarea)
	$req = "SELECT art_contenu FROM articles WHERE art_id = $id";
	$reponse =  $con->query($req);
	if ($reponse == null)
	{
		print_r($db -> errorInfo());
    die();
	}
  else{
  	if($art = $reponse->fetch())
  	{
  		$old_contenu = $art['art_contenu'];
  	}
  }

	try{
		if (strcmp("", $new_contenu) == 0){		//si le contenu n'a pas été modifié  ($new_contneu est vide)

			//requete (ligne de l'article selectionné (par son id)) en "recopiant" le contneu de l'artcle d'origine
			$req = "UPDATE articles SET art_titre='$new_titre', art_date = '$date', art_auteur = '$auteur' WHERE art_id = $id"; 
			// Prepare la requête
    	$trait0 = $con->prepare($req);
    	// execute 
    	$trait0->execute();
    	// echo a message to say the UPDATE succeeded
    	echo $trait0->rowCount() . " L'aticle a été correctement mis à jour.";
		}
		else{			//le contenu de l'aticle à changé
			$req = "UPDATE articles SET art_titre='$new_titre',art_contenu='$new_contenu', art_date = '$date', art_auteur = '$auteur'  WHERE art_id = $id"; 
			// Prepare la requête
    	$trait1 = $con->prepare($req);
    	// executer
    	$trait1->execute();
    	// informer
    	echo $trait1->rowCount() . " L'aticle a été correctement mis à jour.";
		}
	}
	catch(PDOException $e)
  {
  	//affichage des messages d'erreur en cas d'exception levée
  	echo $req . "<br>" . $e->getMessage();
  }

  $con = null;				//fermer connexion BD
?>

<?php 	//insertion footer
	incl_footer();
?>

<!--fichiers script externes-->
</body>
</html>

