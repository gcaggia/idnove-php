<?php require_once $_SERVER['DOCUMENT_ROOT'] . 'idnove/config.php'; 

    if (isset($_GET['LogOut'])) {
        if ($_GET['LogOut'] == 1) {
            unset($_SESSION['utilisateur']);
        }
    }

    if (isset($_SESSION['utilisateur'])) {
        $oUser = unserialize($_SESSION['utilisateur']);
    }

?>

<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="https://s3.amazonaws.com/codecademy-content/projects/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  </head>
  <body>
    <div class="topHeader">
      <div class="container">
        <div class="row">	
          <div class="pull-left">
          <a class="logo"href="#">Idnove</a>
          </div>
          <div class="user pull-right">
            <?php if (isset($_SESSION['utilisateur'])): ?>
            <a class="log logHello">Hello <?php echo $oUser->username; ?></a>       	
      	  <?php else: ?>
      	  	<a class="log" href="connexion.php">Log in</a>    
         <?php endif ?>
          	<?php if (isset($_SESSION['utilisateur'])): ?>
				<a href="account.php" class="btn">My Account</a>
          	<?php else: ?>
            	<a href="register.php" class="btn">Sign up</a>
           <?php endif ?>
          </div>
      </div>
        
    </div>

    

    <div class="feature indexFeature">
      <div class="container">
        <div class="row">
        	<h2>Available everywhere</h2>
        	<p>Start watching on one device, and pick up where you left off on another device.</p>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h3>Bolt</h3>
            <ul>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">Help</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3>More Bolt</h3>
            <ul>
              <li><a href="#">Gift Cards</a></li>
              <li><a href="#">Trailers</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3>News</h3>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">YouTube</a></li>
              <li><a href="#">Google+</a></li>
              <li><a href="#">Facebook</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3>About</h3>
            <ul>
              <li><a href="#">Idnove</a></li>
              <li><a href="#">About the futur</a></li>
              <li><a href="#">Projects</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>