<?php  session_start();
//insertion entete et variables
	require("inc/fonctions.inc.php");
	$title = "Châteaux";																									//modifier 
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
		<h1>Les chateaux de la Loire...</h1>
			<article class="">
				<div class="bl_">
					<h4><a href="chateaux_bords_loire.php">Au bord de la loire</a></h4>
					<p>Amboise, Chaumont, Langeais...</p>
					<p><br/><br/><br/><br/></p>
				</div>
			</article>
			<article class="">
				<div class="bl_">
					<h4><a href="chateaux_eloignes_loire.php">En s'éloignant du fleuve</a></h4>
					<p>Chenonceaux, Chambord...</p>
					<p><br/><br/><br/><br/></p>
				</div>
			</article>
	</section>
</div>
</body>

<?php 	//insertion footer
	incl_footer();
?>