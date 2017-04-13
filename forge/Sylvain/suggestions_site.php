<?php  session_start();
//insertion entete et variables
	require("inc/fonctions.inc.php");
	$title = "Nos idées découvertes";																									//modifier 
	$content = "chateaux, monuments, sites, autres idées de visites et découvertes, sortir des sentiers battus";										//modifier
	incl_entete($title, $content);
	if (!isset($_SESSION["membreid"])){
		incl_menu();
	}
	else{
		incl_menu_backoffice();
		
	}
?>

<!-- les titres et contenu des articles sont récupérés de la BD -->
<!-- catégorie -> sugg_site 
		connexion
		SELECT tout les articles WHERE art_categorie = sugg_site

		query

		lecture ligne à ligne
			$titre
			$contenu
			$date
			$auteur
		insertion dans HTML
-->
<div class="page">
	<section class="sugg_site">
		<h1>Sortir du commun, idées originales</h1>
			
<?php 
//connexion à la base
	require('inc/connexionpdo.inc.php');
	$con = connect_pdo();

	$req = "SELECT art_titre, art_contenu, art_date, art_auteur FROM articles  WHERE art_categorie = 'sugg_site' ORDER BY art_date ASC" ;

	$reponse =  $con->query($req);
	if ($reponse == null)
	{
		print_r($db -> errorInfo());
    die();
	}
  else{
  	while($ligne = $reponse->fetch())
  	{
  		echo '
  			<article class="_art">
  					<h4 class="art_titre">';echo $ligne['art_titre'];echo '</h4>
  					<p class="art_contenu">';echo $ligne['art_contenu']; echo '</p>
  					<p class="art_date">';echo $ligne['art_date']; echo' </p>
  					<p class="art_auteur">';echo $ligne['art_auteur']; echo '</p>
  					<!-- géoloc -->	
				</article>';
  	}
				
  }
?>

	</section>
</div>
<?php 	//insertion footer
	incl_footer();
?>

</body>
</html>