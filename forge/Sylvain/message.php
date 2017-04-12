<?php  session_start();
//insertion entete et variables
	require("inc/fonctions.inc.php");
	$title = "Messages reçus";																																	//modifier 
	$content = "Liste des messages recus";						//modifier
	incl_entete($title, $content);
	if (!isset($_SESSION["membreid"])){
		incl_menu();
	}
	else{
		incl_menu_backoffice();
		
	}
?>



<section class="corps">
	    <h1>Listes des messages reçus</h1>
	      <div class="listes_messages">
	      	<p>
	      		<?php 
	      				//conn BD hostinger
								$DB = 'u765291999_vdlc';			//
								$login = 'u765291999_www';
								$server = 'mysql.hostinger.fr';
								$mdp = 'C@Sj#2017';
								require('inc/connexionpdo.inc.php');
								$con = connect_pdo($DB, $server, $login, $mdp);

	//requet SELECt
	// fetch
				//aff en tableau d elliste des mess
						?>
	      	</p>



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
