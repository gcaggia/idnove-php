<?php
	
	//Paramètre de connexions
	require_once $_SERVER['DOCUMENT_ROOT'] . 'idnove/config.php';

	if (isset($_SESSION['utilisateur'])) {
		$oUser = unserialize($_SESSION['utilisateur']);
	}
	elseif (isset($_POST['user']) && isset($_POST['password'])) {

		
		$username = $_POST['user'];
		$userpass = hash('sha512', $_POST['password']);
		$oUser = new Utilisateur();


        if ($oUser->isExist($username, $userpass)) {

        	$utilisateur = 1;

	        // on crée la variable session utilisateur en sérialisant l'objet
			$_SESSION['utilisateur']=serialize($oUser);
        }
       	else
       		header('location: connexion.php?errorAuth=1');
		
	}
	else {
		header('location: connexion.php?errorAuth=2');
	}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Idnove</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css">
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>

	<div class="main">
		<div class="container">
			<div class="row">

				<h1>Idnove - mon compte</h1>
				<?php echo ($utilisateur = 1 ? "<p>Bienvenue " . $oUser->username . " !</p>" : "");?>

				<a class="btn btn-danger" href="index.php?LogOut=1">Log out</a>
			</div>
		</div>
	</div>
	
</body>
</html>