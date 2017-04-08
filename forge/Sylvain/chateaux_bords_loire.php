<?php  //insertion entete et variables
	require("inc/fonctions.inc.php");
	$title = "Châteaux sur la Loire";																									//modifier 
	$content = "châteaux de la Loire, incontournables";										//modifier
	incl_entete($title, $content);
?>

<!--Contenu HTML -> Christen -->
<body>
<?php incl_menu(); ?>
<div class="loirevalley">
	<h1>Test page Châteaux sur la Loire</h1>
		<section class="">
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
</body>

<?php 	//insertion footer
	incl_footer();
?>