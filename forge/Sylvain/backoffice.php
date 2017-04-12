<?php  session_start();
	//insertion entete et variables
	require("inc/fonctions.inc.php");
	$title = "backoffice";											//modifier 
	$content = "Liste des articles";						//modifier
	incl_entete($title, $content);
	//control de la sssion en cours pour selection menu
	if (!isset($_SESSION["membreid"])){
		incl_menu();
	}
	else{
		incl_menu_backoffice();
	}
?>
<!--F270 : Créer page "backoffice.php" listant les liens pour modifier les articles (copie écran)
Affiché uniquement si la personne connectée a le statut "gestionnaire du site".
Cette liste affichera sous forme de tableau HTML :
- le titre de l'article sous forme de lien de modification de l'article (titre et texte au minimum)
- la catégorie de l'article
- la date de la dernière modification de l'article
- le login de la dernière personne ayant modifié l'article-->

<section class="corps">
	    <h1>Listes des articles</h1>
	    <p>Cliquer sur le titre de l'article pour le modifier</p>
	      <div class="tab_articles">
	      	<table>
	      		<tr>
  						<td>CATEGORIE</td>
  						<td>TITRE</td>
  						<td>DATE</td>
  						<td>AUTEUR</td>
  					</tr>
<?php
	//connexion à la base
	$login = 'www';
	$mdp = '';
	$DB = 'valdeloirechateaux';
	$server = 'localhost';

	require('inc/connexionpdo.inc.php');
	$con = connect_pdo($DB, $server, $login, $mdp);

	//requete
	$req = "SELECT art_id, art_categorie, art_titre, art_categorie, art_date, art_auteur FROM articles";
	$reponse =  $con->query($req);
	if ($reponse == null)
	{
		print_r($db -> errorInfo());
    die();
	}
  else{
  	while($ligne = $reponse->fetch())
  	{
//  		$id= $ligne['art_id'];
//  		echo $id;
  		//affichage ligne / ligne
echo '<tr>
  			<td>';print($ligne['art_categorie']);echo '</td>
  			<td><a href="saisie_modif_articles.php?id=';echo $ligne['art_id'];echo '" title="Modifier cet article">';
  												print($ligne['art_titre']);echo '</a></td>
  			<td>';print($ligne['art_date']);echo '</td>
  			<td>';print($ligne['art_auteur']);echo '</td>
  		</tr>';
  	}
	}

	$con = null;				//fermer connexion BD
?>
			</table>
		</div>
</section>



<?php 	//insertion footer
	incl_footer();
?>
<!--fichiers script externes-->
</body>
</html>