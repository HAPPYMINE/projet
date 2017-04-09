<?php  //insertion entete et variables
	require("inc/fonctions.inc.php");
	$title = "Nos idées découvertes";																									//modifier 
	$content = "chateaux, monuments, sites, autres idées de visites et découvertes, sortir des sentiers battus";										//modifier
	incl_entete($title, $content);
?>

<!--Contenu HTML -> Christen -->
<body>
<?php incl_menu(); ?>
<div class="page">
	<section class="corps">
		<h1>Sortir du commun, idées originales</h1>
			<article class="ctx">
				<h4>La cathédrale de Tours</h4>
				<p>...</p>
				<!-- géoloc -->			
			</article>
			<article class="ctx">
				<h4>Grottes pétrifiantes</h4>
				<p>...</p>
				<!-- géoloc -->			
			</article>
			<article class="ctx">
				<h4>Le Donjon de Loches</h4>
				<p>...</p>
				<!-- géoloc -->			
			</article>
	</section>
</div>
</body>

<?php 	//insertion footer
	incl_footer();
?>