<?php  //insertion entete et variables
	require("inc/fonctions.inc.php");
	$title = "Laisser un message";																																	//modifier 
	$content = "Contact valdeloirechateaux - Laisser votre message";						//modifier
	incl_entete($title, $content);
?>

<!--Contenu HTML -> Christen -->
<?php incl_menu(); ?>
<div class="page">
	<section class="corps">
		<article class="form">
	    <h1>Contactez-nous</h1>
	    <!--Début du formulaire-->
			<form id="form0" name = "form0" action="message.php" method="post" enctype="multipart/form-data" onsubmit="return validSaisie();">
	      <fieldset class ="encadre_form_identite"><legend class="legend">Vous connaitre...</legend>
	      <!--dans div (avec margin top dans css)  plutôt que paragraphe pour aèrer présentation-->
	      <!-- infobulle dans title plutot qu'alert en js-->
	        <div>
	        	<span class="element_requis" title="Nom 3 caractères mini requis."><label class="form_col">NOM prénom : * </label></span>
	        	<input class="form_col" name="identite" title="Nom 3 caractères mini requis." placeholder="3 caractères mini." id="nom" type="text" size="20" maxlength="25" onkeypress="return noNumeric(event);" onblur="myUpperCase(id);" required autofocus/>
	        	<!--span class="tooltip"> 3 caractères minimum</span-->
	        </div>
	        					
	        <div>
	        	<label  class="form_col">Téléphone :</label>
	        	<input  class="form_col" title="numéro sur 10 positions" name="telephone" id="telephone" type="text" size="20" maxlength="20" onkeypress="return onlyNumeric(event);" value="" />
	        			<!--span class="tooltip"> chiffres seulement</span-->
	        </div>

	        <div>
	        	<span class="element_requis" title="Adresse mail requise"><label class="form_col" for="mail">Adresse mail : * </label></span>
							<input class="form_col" name="mail" id="mail" title="Adresse mail requise." placeholder="Adresse mail requise" type="text" size="20" maxlength="100" required />
								<!--span class="tooltip"> Adresse invalide</span-->
					</div>	

	        </fieldset>
					<br/>
	        	<fieldset class ="encadre_message"><legend class="legend">Votre demande...</legend>
	        		<div>
	              <label  class="form_col" for="sujet">Sujet du message :</label>
								<select  name="sujet" id="sujet">
									<option value="none">Sélectionnez le sujet :</option>
									<option value="dc">Demande de contact</option>
									<option value="di">Demande d'information</option>
									<option value="si">Suggestion d'amélioration</option>
								</select>
								<!--span class="tooltip">Sélectionnez un sujet</span-->
	        		</div>
	        
							<div>	
								<span class="element_requis" title="Message 5 carctères mini requis."><label class="form_col">Votre question : * </label> </span> 
								<!--textaera exclue de la class form_col pour ne pas hériter de la propriété width-->      
								<textarea  id="message" name="message" title="Message 5 carctères mini requis." rows="6" cols="50" placeholder="Ecrire ici votre message..." required></textarea>  
								<!--span class="tooltip"> 10 caractères minimum</span-->
							</div>
						</fieldset>  
							
						<!--div class="captcha">
	   					<label for="capcha">Capcha (<em>Obligatoire</em>) : <strong id="calcul"></strong></label>  
	    				<input type="text" id="capcha" name="repMath" value="" placeholder="Notez le résultat du calcul ici..." onkeypress="return onlyNumeric(event);" required/-->
	            <!--t1, t2 et operateur seront tirés aléatoirement par js-->
	    				<!--input type="hidden" name="t1" id="t1" value="" />
	    				<input type="hidden" name="t2" id="t2" value="" />
	    				<input type="hidden" name="operator" id="operator" value="" />
						</div-->

	          <div class="validation">
							<!--span class="form_col"></span-->
	            <!--champ caché pour stocker heure locale, largeur fenetre, resoluton ecran et taille de la zone affichage-->
	            <!--input id="heureClient" name="heureClient" type="hidden"/>
	            <input id="resolecran" name="resolecran" type="hidden"/>
	            <input id="taillefenetre" name="taillefenetre" type="hidden"/>
	            <input id="taillezoneAff" name="taillezoneAff" type="hidden"/-->
							<input type="submit" value="Envoyer" />
							<input type="reset" value="Réinitialiser le formulaire" />    
						</div>
					</form>
		</article>
	</section>
</div>
<?php 	//insertion footer
	incl_footer();
?>
<!--fichiers script externes-->
</body>
</html>