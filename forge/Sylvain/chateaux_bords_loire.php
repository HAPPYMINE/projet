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

<div class="page">
	<section class="corps">
		<h1>En bord de Loire</h1>
			<article class="ctx">
				<h4>Amboise</h4>
				<p>...</p>
				<!-- géoloc -->			
			</article>
			<article class="ctx">
				<h4>Chaumont</h4>
				<p>...</p>
				<!-- géoloc -->			
			</article>
			<article class="ctx">
				<h4>Langeais</h4>
				<p>...</p>
				<!-- géoloc -->			
			</article>
	</section>
</div>
</body>

<?php 	//insertion footer
	incl_footer();
?>