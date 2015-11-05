<?php

if (isset($_SESSION['utilisateur'])) {
    $oUser = unserialize($_SESSION['utilisateur']);
}
elseif (isset($_POST['registerUserName'])  &&  isset($_POST['registerEmail'])
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
elseif (isset($_POST['user']) && isset($_POST['password'])) {

    $userName = $_POST['user'];
    $userPass = hash('sha512', $_POST['password']);
    $oUser = new Utilisateur();

    if ($oUser->isExist($userName, $userPass)) {

        $utilisateur = 1;

        // on crée la variable session utilisateur en sérialisant l'objet
        $_SESSION['utilisateur']=serialize($oUser);
    }
    else {
        header('location: connexion.php?errorAuth=1');
    }
}
else {
    header('location: connexion.php?errorAuth=2');
}
