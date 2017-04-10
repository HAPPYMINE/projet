<?php  //insertion entete et variables
	require("inc/fonctions.inc.php");
	$title = "connexion";																																	//modifier 
	$content = "";						//modifier
	incl_entete($title, $content);
?>


<?php incl_menu(); ?>
<section class="corps">
	    <h1>Connexion gestionnaire</h1>
	      <article class="">
	        <fieldset class ="encadre_form_identite"><legend class="legend">Accés réservé gestionnaire du site</legend>
	          <p>
	            <form>
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
	      </article>      
	  </section>



<?php 	//insertion footer
	incl_footer();
?>
</body>
</html>