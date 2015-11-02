<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Idnove</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>

  <div class="topHeader">
    <div class="container">
      <div class="row"> 
        <div class="pull-left">
          <a class="logo"href="./">Idnove</a>
        </div>
        <div class="user pull-right">
          <?php if (isset($_SESSION['utilisateur'])) : ?>
            <a class="log logHello">Hello <?php= $oUser->username; ?></a>git          
          <?php else : ?>
            <a class="log" href="connexion.php">Log in</a>    
          <?php endif ; ?>
          <?php if (isset($_SESSION['utilisateur'])) : ?>
            <a href="account.php" class="btn">My Account</a>
          <?php else : ?>
            <a href="register.php" class="btn">Sign up</a>
          <?php endif ; ?>
        </div>
      </div>
    </div>  
  </div>

  <div class="main connexion">
      <div class="container">
          <div class="row">
              <div class="col-sm-6 col-xs-6 col-xs-offset-3 col-sm-offset-3 vcenter">
              	<h2>Log In</h2>
                  <?php if (isset($_GET['errorAuth']) && ($_GET['errorAuth'] == 1)) : ?>
                      <p class="error">Authentication error... Please try again...</p>
                  <?php elseif (isset($_GET['errorAuth']) && ($_GET['errorAuth'] == 2)) : ?>
                      <p class="error">You have to login before accessing your personnal page</p>
                  <?php endif ; ?>
                  <form role="form" action="account.php" method="POST">
                    <div class="form-group">
                      <label for="user">User : </label>
                      <input name="user" type="user" class="form-control" id="user" placeholder="Enter user name" required>
                    </div>
                    <div class="form-group">
                      <label for="pwd">Password:</label>
                      <input name="password" type="password" class="form-control" id="pwd" placeholder="Enter password" required>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                  </form>
              </div>
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
