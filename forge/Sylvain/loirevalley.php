<?php  //insertion entete et variables
	require("inc/fonctions.inc.php");
	$title = "Châteaux";																									//modifier 
	$content = "châteaux de la Loire, incontournables";										//modifier
	incl_entete($title, $content);
?>

<!--Contenu HTML -> Christen -->
<body>
<?php incl_menu(); ?>
<div class="loirevalley">
	<h1>Test page loire valley</h1>
		<div class="bl_">
		<h4><a href="chateaux_bords_loire.php">Au bord de la loire</a></h4>
		<p>Amboise, Chaumont, Langeais...</p>
		<p><br/><br/><br/><br/></p>
	</div>
	<div class="bl_">
		<h4><a href="chateaux_eloignes.php">En s'éloignant du fleuve</a></h4>
		<p>Chenonceaux, Chambord...</p>
		<p><br/><br/><br/><br/></p>
	</div>
</div>
</body>

<?php 	//insertion footer
	incl_footer();
?>