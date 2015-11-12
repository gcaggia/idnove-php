<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://s3.amazonaws.com/codecademy-content/projects/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="verif.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
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
                        <a class="btn">Sign up</a>
                    <?php endif ?>
                </div>
            </div>

        </div>
    </div>
    <div class="feature">
        <div class="container">
            <div class="row">
                <h2 id="hregister">Registration</h2>    
                <form id="registerForm" class="form-horizontal" role="form"  action="register.php" method="POST">

                    <div class="form-group">
                        <div class="errorRegister">
                            <?php if (isset($_GET['errorRegister']) && ($_GET['errorRegister'] == 1)) : ?>
                                <p class="msgError">This user already exists !</p>
                            <?php elseif (isset($_GET['errorRegister']) && ($_GET['errorRegister'] == 2)) : ?>
                                <p class="msgError">An error has occured... Please try again...</p>
                            <?php elseif (isset($_GET['errorRegister']) && ($_GET['errorRegister'] == 3)) : ?>
                                <p class="msgError">You are a bot, this form is only for human...</p>
                            <?php endif ?>
                        </div>
                        <label class="control-label col-sm-2" for="userName">User name :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" placeholder="Enter your User name" name="registerUserName">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email :</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="registerEmail">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Password :</label>
                        <div class="col-sm-10"> 
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="registerPassword">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Captcha :</label>
                        <!-- <div class="col-sm-3 captcha"><?= $_SESSION['varCaptcha'] ?></div> -->
                        <!-- <div class="col-sm-3"><img src="./features/captcha.php"></div> -->
                        <div class="col-sm-10 g-recaptcha" data-sitekey="6LcijRATAAAAAJOdMmPujrAU3fCJc4OwtIfMdBne"></div>
                        <!-- <div class="col-sm-5"> 
                            <input type="text" class="form-control" id="captcha" placeholder="Enter captcha" name="registerPassword" style="width: 125px">
                        </div> -->
                    </div>

                    <div class="form-group"> 
                        <div class=" col-sm-12">
                        <button type="submit" class="btn btn-default btn-register">Submit</button>
                        </div>
                    </div>

                </form>
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