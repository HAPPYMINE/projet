<?php  session_start();
//insertion entete et variables
	require("inc/fonctions.inc.php");
	$title = "Déconnexion";																		//modifier 
	$content = "Fin de session de l'utilisateur connecté";						//modifier
	incl_entete($title, $content);
	$login = $_SESSION["membreid"];
	$id_s=session_id();
	$_SESSION = array(); // Détruit toutes les variables de session
	session_destroy();

	incl_menu();
?>

	<h3>Utilisateur  <?php echo $login; ?> déconnecté </h3>
	<p>il y a eu destruction de la session d'identifiant <?php echo $id_s?></p>
	<p><a href="index.php">retour à l'acceuil</a></p>	

<?php 	//insertion footer
	incl_footer();
?>

<!--fichiers script externes-->
</body>
</html>