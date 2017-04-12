<?php  session_start();
//insertion entete et variables
  //require("inc/acces.inc.php");
	require("inc/fonctions.inc.php");
	$title = "backoffice";																																	//modifier 
	$content = "Liste des articles";						//modifier
	incl_entete($title, $content);
	
	if (!isset($_SESSION["membreid"])){
		incl_menu();
	}
	else{
		incl_menu_backoffice();
		
	}
?>

<section class="corps">
	    <h1>Listes des articles</h1>
	    <p>Cliquer sur l'article pour le modifier</p>
	      <div class="listes_articles_incontournables">
	      	
	      	<table>
	      		<tr><td>Au bords de la loire...<td></tr>
	      		<tr>
	      			<td>Titre</td>
	      			<td>Catégorie</td>
	      			<td>Date</td>
	      			<td>Login</td>
	      		</tr>
	      		<tr><td>n s'éloignant du fleuve</td></tr>

	      	</table>
	      </div>	
	      <div class="listes_articles_suggestions">
	      	<p>Clicher sur l'article pour le modifier</p>
	      	<table>
	      		
	      		
	      	</table>
	      </div>	
	      	<!--  liens vers  modif-article.php et message.php -->
	   
</section>



<?php 	//insertion footer
	incl_footer();
?>
<!--fichiers script externes-->
</body>
</html>





<!--F270 : Créer page "backoffice.php" listant les liens pour modifier les articles (copie écran)
Affiché uniquement si la personne connectée a le statut "gestionnaire du site".
Cette liste affichera sous forme de tableau HTML :
- le titre de l'article sous forme de lien de modification de l'article (titre et texte au minimum)
- la catégorie de l'article
- la date de la dernière modification de l'article
- le login de la dernière personne ayant modifié l'article-->