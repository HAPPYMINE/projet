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
	<h1>il y a eu destruction de la session d'identifiant<?php echo $id_s?></h1><br/>
	<a href="index.php">retour à index.html</a>
</body>
</html>