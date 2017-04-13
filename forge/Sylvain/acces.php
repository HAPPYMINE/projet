<!-- vérification de l'identité de l'utilisateur-->
<?php session_start();
	$id_session = $_REQUEST['login'];
	$mdp_session = md5($_REQUEST['psw']);			//dans BD mdp (varchar 32) chiffré md5

	require('inc/connexionpdo.inc.php');
	$con = connect_pdo();

	$req = "SELECT * FROM gestionnaire WHERE gest_login='$id_session' AND gest_pswd='$mdp_session'";
	$reponse =  $con->query($req);
	if ($reponse == null)
	{
		print_r($db -> errorInfo());
    die();
	}
  else{
    if ($ligne = $reponse->fetch())
    {
    	// Si une ligne a été trouvée c'est que (identifiant, mot de passe) est valide
			$_SESSION["controle"] = TRUE;
			$_SESSION["membreid"] = $id_session;
			header("Location: backoffice.php");
		}else {
			$_SESSION["controle"] = FALSE;
			header("Location: index.php");
		}
  }
?>