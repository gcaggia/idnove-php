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

				<div class="col-sm-6 col-xs-6 col-xs-offset-3 col-sm-offset-3 vcenter">
					<h1>Idnove</h1>
					<form role="form" action="result.php" method="POST">
					  <div class="form-group">
					    <label for="user">User : </label>
					    <input name="user" type="user" class="form-control" id="user" placeholder="Enter user name" required>
					  </div>
					  <div class="form-group">
					    <label for="pwd">Password:</label>
					    <input name="password" type="password" class="form-control" id="pwd" placeholder="Enter password" required>
					  </div>
					  <div class="checkbox">
					    <label><input type="checkbox"> Remember me</label>
					  </div>
					  <button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>