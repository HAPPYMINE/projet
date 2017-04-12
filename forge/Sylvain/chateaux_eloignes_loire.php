<?php  session_start();
//insertion entete et variables
	require("inc/fonctions.inc.php");
	$title = "Châteaux en Val de Loire";																									//modifier 
	$content = "châteaux de la Loire, incontournables";										//modifier
	incl_entete($title, $content);
	if (!isset($_SESSION["membreid"])){
		incl_menu();
	}
	else{
		incl_menu_backoffice();
		
	}
?>

<div class="page">
	<section class="corps">
		<h1>En bord de Loire</h1>
			<article class="ctx">
				<h4>Chenonceaux</h4>
				<p>...</p>
				<!-- géoloc -->			
			</article>
			<article class="ctx">
				<h4>Villandry</h4>
				<p>...</p>
				<!-- géoloc -->			
			</article>
			<article class="ctx">
				<h4>Azay Le Rideau</h4>
				<p>...</p>
				<!-- géoloc -->			
			</article>
	</section>
</div>
</body>

<?php 	//insertion footer
	incl_footer();
?>