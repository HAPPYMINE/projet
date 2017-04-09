<?php  //insertion entete et variables
	require("inc/fonctions.inc.php");
	$title = "Châteaux Monuments";																									//modifier 
	$content = "Val de Loire, châteaux et monuments, suggestions";										//modifier
	incl_entete($title, $content);
?>

<!--Contenu HTML -> Christen -->
<body>
<?php incl_menu(); ?>
<div class="page">
	<section class="corps">
		<h1>A voir  aussi en Val de Loire...</h1>
			<article class="">
				<div class="bl_">
					<h4><a href="suggestions_site.php">Suggestions du chef !</a></h4>
					<p>En val de loire il y a aussi autres choses que les chateaux renaissances...</p>
					<p><br/><br/><br/><br/></p>
				</div>
			</article>
			<article class="">
				<div class="bl_">
					<h4><a href="suggestions_internautes.php">Les idées de nos visiteurs</a></h4>
					<p>Ces idées sont les votres. Pour contribuer, laisser votre suggestions dans le <a href="contact.php">formulaire</a></p>
					<p><br/><br/><br/><br/></p>
				</div>
			</article>
	</section>
</div>
</body>

<?php 	//insertion footer
	incl_footer();
?>