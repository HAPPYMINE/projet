<?php  //insertion entete et variables
	require("inc/fonctions.inc.php");
	$title = "Val De Loire et Châteaux";																																	//modifier 
	$content = "Ce site vous présente les châteaux de la Loire
							ainsi que d'autres sites et monuments à découvrir hors des sentiers battus";						//modifier
	incl_entete($title, $content);
?>

<!--Contenu HTML -> Christen -->
<?php incl_menu(); ?>

	<div id="welcome"><p><?php incl_bienvenue(); ?></p></div>
	<!--div>menu droit à venir...<-->
		<section class="corps">
	    <h1>Châteaux et Découvertes</h1>
	      <article class="accueil">
	        <h3>Seul ou entre amis, en famille ou en amoureux, comment choisir facilement, les châteaux de la région  Val de Loire à visiter ?</h3>
	          <p>
	            Nous avons la bonne réponse : désormais, vous n’avez plus besoin de vous y connaître en histoire de la France avant de pouvoir choisir les châteaux, les monuments ou les demeures à visiter. Nous sommes des amoureux  inconditionnés des châteaux de la région centre et c’est avec un grand plaisir que nous souhaitons vous accompagner à trouver vos coups de cœur, les mieux adaptés à vos souhaits,  des incontournables aux plus insolites!
	          </p>
	          <p>
	          	Allons-y ! Nous vous offrons deux possibilités : si vous voulez visiter les châteaux, les sites, les monuments qui ont une vue sur la Loire, vous pouvez directement aller dans la rubrique <a href="loirevalley.php">LoireValley</a>. Vous avez peut-être déjà visité ou entendu parler ou vu à la télévision des certains châteaux. Cependant, il existe bien d’autres châteaux, monuments ou sites qui ne sont pas aussi connus mais qui répondront peut-être mieux à vos souhaits. Par ailleurs, vous souhaitez nous proposer  des lieux de visites sortant des sentiers battus. Nous vous invitons à aller dans notre rubrique Suggestions. Nous mettons à jour nos <a href="suggestions.php">suggestions</a> en tenant en compte de vos commentaires en toute indépendance, en nous concentrant sur une seule chose : l’intérêt
	          </p>
	      </article>      
	  </section>
	
	</div>


<?php 	//insertion footer
	incl_footer();
?>
</body>
</html>
