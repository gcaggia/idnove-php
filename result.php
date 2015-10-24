<?php 
	if (isset($_POST['user']) && isset($_POST['password']))
		echo '<p>Authentification in progress...</p>';
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
				
			</div>
		</div>
	</div>
	
</body>
</html>