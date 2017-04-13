<?php  session_start();
//insertion entete et variables
	require("inc/fonctions.inc.php");
	$title = "Châteaux sur la Loire";																									//modifier 
	$content = "châteaux de la Loire, incontournables";										//modifier
	incl_entete($title, $content);
	if (!isset($_SESSION["membreid"])){
		incl_menu();
	}
	else{
		incl_menu_backoffice();
	}

?>

<!-- les titres et ciontenu articles sont récupérés de la BD -->
<!-- catégorie -> ctx_bord_loire -->
<div class="page">
	<section class="corps">
		<h1>En bord de Loire</h1>
<?php 
//connexion à la base
	require('inc/connexionpdo.inc.php');
	$con = connect_pdo();

	$req = "SELECT art_titre, art_contenu, art_date, art_auteur FROM articles  WHERE art_categorie = 'ctx_bord_loire' ORDER BY art_date ASC" ;

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