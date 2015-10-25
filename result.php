<?php
	
	//Paramètre de connexions
	require_once $_SERVER['DOCUMENT_ROOT'] . 'idnove/config.php';

	if (isset($_POST['user']) && isset($_POST['password'])) {

		$strSQL = "SELECT count(*) as result  " .
		          "FROM utilisateur  " .
		          "WHERE username = '" . $_POST['user']     . "'" .
		          "  AND userpass = '" . hash('sha512', $_POST['password']) . "'";
		$rs = $oPDO->query($strSQL);
		$rs->setFetchMode(PDO::FETCH_OBJ);

		while( $currentLigne = $rs->fetch() )
		{
		        if ($currentLigne->result > 0)
		        	$utilisateur = 1;
		       	else
		       		header('location: index.php?errorAuth=1');
		}
		$rs->closeCursor();

	}
	else
		header('location: index.php');
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

				<h1>Idnove - Result</h1>
				<?php echo ($utilisateur = 1 ? "<p>Bienvenue</p>" : "");?>
			</div>
		</div>
	</div>
	
</body>
</html>