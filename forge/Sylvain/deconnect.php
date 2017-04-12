<?php session_start();
	$id_s=session_id();
	$_SESSION = array(); // Détruit toutes les variables de session
	session_destroy();
?>
<html>
	<head>
		<title>session deconnection</title>
	</head>
<body>
	<h3>il y a eu destruction de la session d'identifiant <?php echo $id_s?></h3>
	<p><a href="index.php">retour à l'acceuil</a></p>	
</body>
</html>