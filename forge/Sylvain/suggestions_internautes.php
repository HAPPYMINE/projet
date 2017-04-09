<?php  //insertion entete et variables
	require("inc/fonctions.inc.php");
	$title = "Vos idées découvertes";																									//modifier 
	$content = "chateaux, monuments, sites, autres idées de visites et découvertes, sortir des sentiers battus";										//modifier
	incl_entete($title, $content);
?>

<!--Contenu HTML -> Christen -->
<body>
<?php incl_menu(); ?>
<div class="page">
	<section class="corps">
		<h1>En bord de Loire</h1>
			<article class="ctx">
				<h4>Basiliques Saint-Martin</h4>
				<p>...</p>
				<!-- géoloc -->			
			</article>
			<article class="ctx">
				<h4>Musée du compagnonage</h4>
				<p>...</p>
				<!-- géoloc -->			
			</article>
			<article class="ctx">
				<h4>Caves des producteurs</h4>
				<p>...</p>
				<!-- géoloc -->			
			</article>
	</section>
</div>
</body>

<?php 	//insertion footer
	incl_footer();
?>