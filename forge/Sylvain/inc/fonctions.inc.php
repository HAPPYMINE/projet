<?php 

/**
*  Inclure  entete (DOCTYPE et HEAD)
*  Variabilisation <title> et <meta content>
*  @param : (string) -> <title> et <meta content>
*/
function incl_entete($title, $content)
{
	//double guillements pur interpréter $var php
echo "<!DOCTYPE html>			
				<html>
					<head>
						<!-- ici on personalise <title>, var définit dans incl_entete.php-->
						<title>$title</title>
						<meta charset=\"utf-8\" />
						<meta name=\"description\" content=\"$content\" />
						<meta name=\"viewport\" content=\"width=320\" />
					  <link rel=\"icon\" type=\"image/x-icon\" href=\"images/favicon.png\" />
					  <link rel=\"stylesheet\" href=\"css/style.css\"/>
					  <link rel=\"stylesheet\" href=\"css/style_backoffice.css\"/>
					</head>
				<body>";
}



/**
*	Inclusion Bannière et menu du haut
*/
function incl_menu()
{
echo '
	<!-- en-tete commun à l\'ensemble du site-->
	<header class="entete">
		<div ><a href="index.php"><img id="logo" src="images/logo.png" alt="logo"/></a></div>
		<div id="titre">
		  <h1>Val De Loire et Châteaux</h1>
		  <h4>Des incontournables et des moins connus...</h4>
		</div>
		<!-- connexion au backOffice -->
		<div id="btn_connexion"><a  href="connexion.php" title="connexion"> CONNEXION</a></div>
	</header>
	<!-- boutons pour selection chapitre ou fonctionnalité (connection...)-->
	<nav class="menuHaut">
			<!--  élémént sélectionné du menu en gras,attributs title pour info-bulle--><!-- en-tete commun à l\'ensemble du site-->
			<ul>
				<li id="t1"><a href="index.php" title="Acceuil">Acceuil</a></li>
				<li><a href="loirevalley.php" title="Incontournables">Incontournables</a></li>
				<li><a href="suggestions.php" title="suggestions">Suggestions</a></li>
				<li><a href="contact.php" title="connexion">Contact</a></li>
			</ul>
	</nav>';
}


/**
*	Inclusion Menu backogcie pour gestionnaire du site
*/
function incl_menu_backoffice()
{
	
echo '
	<!-- en-tete commun à l\'ensemble du site-->
	<header class="entete">
		<div id="logo"><a href="index.html"><img  src="images/logo.png" alt="logo" width="120" height="100"/></a></div>
		<div id="titre">
		  <h1>Val De Loire et Châteaux</h1>
		  <h4>Des incontournables et des moins connus...</h4>
		</div>
		<!-- F267 : Créer le boutons "Connexion" (au backoffice) (copie ecran) -->
		<div id="btn_connexion">
			<ul >
				<li><a href="deconnect.php" title="deconnexion"> DECONNEXION</a></p></li>
				<!--F269 : Afficher le pseudo (login) du connecté (copie ecran)-->
				<li>';printf("Gestionnaire connecté : ".$_SESSION["membreid"]); echo '</li>  
			</ul>
		</div>
	</header>
	<!-- boutons pour selection chapitre ou fonctionnalité (connection...)-->
	<nav class="menuHaut">
			<!--  ttributs title pour info-bulle--><!-- en-tete commun à l\'ensemble du site-->
			<ul>
				<li><a href="index.php" title="Acceuil">Acceuil</a></li>
				<li><a href="loirevalley.php" title="Incontournables">Incontournables</a></li>
				<li><a href="suggestions.php" title="suggestions">Suggestions</a></li>
				<!--li><a href="contact.php" title="connexion">Contact</a></li-->
				<li><a href="backoffice.php" title="backoffice">BackOffice</a></li>
				<li><a href="message.php" title="messages">Messages</a></li>
			</ul>

	</nav>';
}


/*
* F274 : Mettre "Bienvenue" en haut à droite lors de la 1e visite des pages grace cookies
*/
function incl_bienvenue()
{
	//creation cookie - durée de validité : 8 jours
	setcookie('welcome', 'deja_vu', (time() + 3600 * 24));
	//affiche mess si dejà vu ou non
	if (isset($_COOKIE['welcome'])){
		echo "Content de vous retrouver !";
	}
	else{
		echo "Bienvenue pour votre 1° visite !";
	}
}


/**
*  Inclure  footer (DOCTYPE et HEAD)
*/
function incl_footer()
{
echo "<footer>
	<!--css à retrvailler : mage trop la zone d'affichage...-->
		<nav>
			<div class='infooter' id='copyright'>
      Copyright &copy; 2016-2017 Châteaux et Découvertes : 
      <br/>Christen et Sylvain - NFA017/21/83<br/>Tous droits réservés
      </div>

			<div class='infooter'>
        <ul>
          <li><a href='contact.html'>Contact</a></li>
			    <li><a href='mentions.html'>Mentions légales</a></li>
        </ul>  
      </div>

      <div class='infooter' id='liens'>
        <ul>
          <li>Partager : </li>
          <li>Retrouver nous sur : </li>
        </ul>
      </div>

			<div class='imgliens' id='imgliens'>
        <ul>
          <li>
            <a href='http://www.facebook.com/sharer.php?u=http://sjoube.free.fr&amp;t=ABCInformatique' target='blank'><img src='images/facebook.png'  alt='partager sur facebook'/></a>
            <a href='http://twitter.com/?status=http://sjoube.free.fr' target='blank'>
            <img src='images/twitter.png' alt='partager sur twitter' /></a>
          </li>
          <li><a href='https://fr-fr.facebook.com/' target='blank'>
            <img src='images/facebook.png' alt='logos twitter facebook'  /></a>
            <a href='https://twitter.com/?lang=fr' target='blank'>
            <img src='images/twitter.png' alt='logos twitter facebook'  /></a>
          </li>
        </ul>
      </div>
      <div class='infooter'>
        <p>
            <a href='http://jigsaw.w3.org/css-validator/check/referer'>
            <img style='border:0;width:88px;height:31px' src='http://jigsaw.w3.org/css-validator/images/vcss-blue' alt='CSS Valide !'' />
            </a>
        </p>
      </div>
		</nav>
	</footer>";
}


?>
