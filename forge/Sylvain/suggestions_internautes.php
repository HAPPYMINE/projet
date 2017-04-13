<?php  session_start();
//insertion entete et variables
	require("inc/fonctions.inc.php");
	$title = "Vos idées découvertes";																									//modifier 
	$content = "chateaux, monuments, sites, autres idées de visites et découvertes, sortir des sentiers battus";										//modifier
	incl_entete($title, $content);
	if (!isset($_SESSION["membreid"])){
		incl_menu();
	}
	else{
		incl_menu_backoffice();
		
	}
?>

<!-- les titres et ciontenu articles sont récupérés de la BD -->
<!-- catégorie -> sugg_inter -->
<div class="page">
	<section class="sugg_inter">
		<h1>Vos idées de sortie</h1>
		<?php 
//connexion à la base
	require('inc/connexionpdo.inc.php');
	$con = connect_pdo();

	$req = "SELECT art_titre, art_contenu, art_date, art_auteur FROM articles  WHERE art_categorie = 'sugg_inter' ORDER BY art_date ASC" ;

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
</body>

<?php 	//insertion footer
	incl_footer();
?>