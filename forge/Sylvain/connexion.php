<?php  session_start();
	//require("inc/acces.inc.php");
	require("inc/fonctions.inc.php");
	$title = "connexion";																																	//modifier 
	$content = "Identification du gestionnaire du site";						//modifier
	incl_entete($title, $content);
	if (!isset($_SESSION["membreid"])){
		incl_menu();
	}
	else{
		incl_menu_backoffice();
		
	}
?>

<section class="corps">
	    <h1>Connexion gestionnaire</h1>
	      <div class="">
	        <fieldset class ="encadre_form_identite"><legend class="legend">Accés réservé gestionnaire du site</legend>
	          <p>
	            <form  methode="post"  action="acces.php">
	            	<p>
	            		<label class="form_col" >login :   </label>
	            		<input class="form_col" type="text" name="login" required>
	            	</p>
	            	<p>
	            		<label class="form_col" >mot de passe :   </label>
	            		<input class="form_col" type="password" name="psw" required>
	            	</p>
	            	<div class="validation">
									<input type="submit" value="Connexion" />   
								</div>
	            </form>
	          </p>
	          <p>
	          	
	          </p>
	        </fieldset>	
	      </div>      
</section>

<?php 	//insertion footer
	incl_footer();
?>
</body>
</html>