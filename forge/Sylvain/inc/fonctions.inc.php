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
						<meta name=\"viewport\" content=\"width=device-width\" />
					  <link rel=\"icon\" type=\"image/x-icon\" href=\"images/favicon.ico\" />
					  <link rel=\"stylesheet\" href=\"css/style.css\"/>
					</head>";
}



/**
*	Inclusion Bannière et menu du haut
*/
function incl_menu()
{
echo '
	<!-- en-tete commun à l\'ensemble du site-->
	<header class="entete">
		<div id="logo"><a href="index.html"><img  src="images/index.jpeg" alt="logo" width="120" height="100"/></a></div>
		<div id="titre">
		  <h1>Chateaux et découvertes</h1>
		  <h4>Des incontournables et des moins connus...</h4>
		</div>
		<!-- connexion au backOffice -->
		<p id="btn_connexion"> <a  href="connexion.php" title="connexion"> CONNEXION</a></p>
	</header>
	<!-- boutons pour selection chapitre ou fonctionnalité (connection...)-->
	<nav class="menuHaut">
			<!--  élémént sélectionné du menu en gras,attributs title pour info-bulle--><!-- en-tete commun à l\'ensemble du site-->
			<ul>
				<li><a href="index.php" title="Acceuil">Acceuil</a></li>
				<li><a href="loirevalley.php" title="Incontournables">Incontournables</a></li>
				<li><a href="suggestions.php" title="suggestions">Suggestions</a></li>
				<li><a href="contact.php" title="connexion">Contact</a></li>
			</ul>

	</nav>';
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
      <br/>Christen et Sylvain - NFA017/83<br/>Tous droits réservés
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