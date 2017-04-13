<?php  session_start();
//insertion entete et variables
	require("inc/fonctions.inc.php");
	$title = "Validation de formulaire";																																	//modifier 
	$content = "Contact valdeloirechateaux - Validation de votre message";						//modifier
	incl_entete($title, $content);

	// connect DB
	require('inc/connexionpdo.inc.php');
	$con = connect_pdo();

	if (!isset($_SESSION["membreid"])){				//si c'est un internaute anonyme
		incl_menu();

		//var BD
		$identite = $_POST['identite'];					//identité en 1 champ ; creer fct pour tronquer nom et prénom et modifier BD
		$mail = $_POST['mail'];		
		$telephone = $_POST['telephone'];
		$categorie = $_POST['sujet'];
		$message = $_POST['message'];

		//var utilisée dans le script
		$time = time();
		$date = date('l d F Y H:i:s',$time);				//pour récupérer heure de sauvegarde du mess

		//******************************************************
		//	A FAIRE -> vérifier que l'utilisateur n'existe pas déjà dans la base
		//						
		//******************************************************

		//définit la req
		//insertion user
		$req0="INSERT INTO user(user_identite, user_telephone, user_mail) VALUES ('$identite', '$telephone', '$mail')  ";
		//permet d'envoyer la requête au serveur.
		$resultat0 = $con->query($req0); 

		//insert mess
		// -> insérer date serveur SQL...  (type de donnée SQL mess_date -> DATETIME)
		//$req1="INSERT INTO messages(mess_sujet, mess_contenu, mess_date) VALUES ('$categorie', '$message', NOW()) ";
		// -> insérer date serveur PHP...  (type de donnée SQL mess_date -> VARCHAR)
		$req1="INSERT INTO messages(mess_sujet, mess_contenu, mess_date, mess_auteur) VALUES ('$categorie', '$message', '$date','$identite' ) "; 			/* $identite -> (SELECT user_id FROM user WHERE user_identite = $identite*/

		//envoyer la requête au serveur.
		$resultat1 = $con->query($req1); 

		//on teste si requetes ont abouti
		if ($resultat0 == null || $resultat1 == null  )
		{
			echo "Erreur d'accés à la BD...";
			print_r($con->errorInfo());		//Retourne les informations associées à l'erreur lors de la dernière opération sur BD
			die();												//->exit()
		}

		echo "Message envoyé à $date";

		$con = null;				//fermer connexion BD
	}	

	else{
		incl_menu_backoffice();

	/*F278 : Liste des messages recus sur page "message.php" (copie ecran)
	Si c'est un administrateur connecté qui consulte la page "messages.php" ,
	afficher en plus, la liste des messages reçus via le formulaire de contact.*/

		if (isset($_SESSION["membreid"]))
		{																				//prepare l tableau de résultat
			echo '<section class="corps">									
		    <h1>Listes des messages reçus</h1>
		      <div class="tab_articles">
		      	<table>
		      		<tr>
	  						<td>SUJET</td>
	  						<td>CONTENU</td>
	  						<td>DATE</td>
	  						<td>AUTEUR</td>
	  					</tr>';
	  	//requete -> selection de tous les champs et entités de la table mess
			$req2 = "SELECT mess_sujet, mess_contenu, mess_date, mess_auteur FROM messages";
			$reponse =  $con->query($req2);
			if ($reponse == null)
			{
				print_r($db -> errorInfo());
		    die();
			}
		  else{
		  	while($ligne = $reponse->fetch())				//affiche ligne/ligne
		  	{
		  		echo '<tr>
		  			<td>';print($ligne['mess_sujet']);echo '</td>
		  			<td>';echo $ligne['mess_contenu'];echo '</td>
		  			<td>';print($ligne['mess_date']);echo '</td>
		  			<td>';print($ligne['mess_auteur']);echo '</td>
		  		</tr>';
		  	}
			}
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