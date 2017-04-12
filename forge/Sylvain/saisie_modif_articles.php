<?php  session_start();
//insertion entete et variables
	require("inc/fonctions.inc.php");
	$title = "Modification des articles";																		//modifier 
	$content = "Formulaire de modiciations des articles du site";						//modifier
	incl_entete($title, $content);
	if (!isset($_SESSION["membreid"])){
		incl_menu();
	}
	else{
		incl_menu_backoffice();
	}
?>


<?php
//connexion à BD pour préremplir le formulaire avec les 'anciennes ' valeurs
//echo $_REQUEST['id'];			//test ok
//echo $_REQUEST['titre'];	//test ok
	$id = $_REQUEST['id'];
	//connexion à la base
	$login = 'www';
	$mdp = '';
	$DB = 'valdeloirechateaux';
	$server = 'localhost';

	require('inc/connexionpdo.inc.php');
	$con = connect_pdo($DB, $server, $login, $mdp);

	//requete (ligne de l'article selectionné (par son id))
	$req = "SELECT art_titre, art_contenu FROM articles WHERE art_id = $id";
	$reponse =  $con->query($req);
	if ($reponse == null)
	{
		print_r($db -> errorInfo());
    die();
	}
  else{
  	if(!$ligne = $reponse->fetch())
  	{
  		print("Il n'y a pas d'articles correspondant");
  	}
  }
  $con = null;				//fermer connexion BD

?>

<!--F271 : Créer en backoffice le formulaire de modification des articles (copie ecran).-->
<section class="corps">
	    <h1>Modification d'article (id = <?php echo $_REQUEST['id'];?>)</h1>  <!-- $_POST ne passe pas-->
	      <div class="modif_article">
	      		<form  methode="post"  action="modif_articles.php">
	      				<p hidden>		<!--transmettre id à modif_article.php-->
	      					<label class="form_col">art_id:</label>
	      					<input class="form_col2" name="id" value="<?php echo $_REQUEST['id'];?>"> 
	      				</p>
	            	<p>
	            		<label class="form_col" >Titre:   </label>
	            		<input class="form_col2" size="50" maxlength="50" type="text" name="titre" value="<?php echo $ligne['art_titre']; ?>">
	            	</p>
	            	<p>
	            		<label class="form_col" >Contenu :   </label>
	            		<textarea class="form_col2" rows="12" cols="100" name="contenu" maxlength="1000" placeholder="<?php echo $ligne['art_contenu']; ?>" ></textarea>
	            	</p>
	            	<div class="validation">
									<input type="submit" value="Changer" />   
								</div>
	            </form>
	      </div>	
</section>



<?php 	//insertion footer
	incl_footer();
?>

<!--fichiers script externes-->
</body>
</html>

