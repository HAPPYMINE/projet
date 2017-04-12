<?php  session_start();
//insertion entete et variables
	require("inc/fonctions.inc.php");
	$title = "Modification des articles";																																	//modifier 
	$content = "Formulaire de modiciations des articles du site";						//modifier
	incl_entete($title, $content);
	if (!isset($_SESSION["membreid"])){
		incl_menu();
	}
	else{
		incl_menu_backoffice();
		
	}
?>

<section class="corps">
	    <h1>Modification d'article</h1>
	      <div class="modif_article">

	      		<form  methode="post"  action="----.php">
	            	<p>
	            		<label class="form_col" >blabla:   </label>
	            		<input class="form_col" type="text" name="login" required>
	            	</p>
	            	<p>
	            		<label class="form_col" >blabla :   </label>
	            		<input class="form_col" type="password" name="psw" required>
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


<!--F278 : Liste des messages recus sur page "message.php" (copie ecran)
Si c'est un administrateur connecté qui consulte la page "messages.php" ,
afficher en plus, la liste des messages reçus via le formulaire de contact.-->