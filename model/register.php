<?php 

if (isset($_POST['registerUserName'])  &&  isset($_POST['registerEmail'])
     && isset($_POST['registerPassword'])) {

    $userName = $_POST['registerUserName'];
    $userMail = $_POST['registerEmail'];
    $userPass = hash('sha512', $_POST['registerPassword']);

    $oUser = new Utilisateur();

    // if user already exists
    if ($oUser->isExist($userName, $userPass)) {
        header('location: register.php?errorRegister=1');
    }
    else {

        $oUser->addNewUser($userName, $userMail, $userPass);

        //redirection to connexion page
        header('location: connexion.php');
    }
}
