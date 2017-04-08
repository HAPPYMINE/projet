<?php  //insertion entete et variables
	require("inc/fonctions.inc.php");
	$title = "Châteaux et découvertes";																																	//modifier 
	$content = "Ce site vous présente les châteaux de la Loire
							ainsi que d'autres sites et monuments à découvrir hors des sentiers battus";						//modifier
	incl_entete($title, $content);
?>

<!--Contenu HTML -> Christen -->
<body>
<?php incl_menu(); ?>
<div class="page">
	<h1>Test page acceuil</h1>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

	<div>
		<p></p>
		<p></p>
	</div>
</div>
</body>

<?php 	//insertion footer
	incl_footer();
?>