<?php

//require_once $_SERVER['DOCUMENT_ROOT'] . 'idnove/features/captcha.php';

//$_SESSION['varCaptcha'] = captchaImage(CAPTCHA_LENGTH);

if (isset($_POST['registerUserName'])  &&  isset($_POST['registerEmail'])
    && isset($_POST['registerPassword'])) {

        
    // Ma clé privée
    $secret = "6LcijRATAAAAAO0IU3pc2vMbr-XiwU8uhxzc_kiE";
    // Paramètre renvoyé par le recaptcha
    $response = $_POST['g-recaptcha-response'];
    // On récupère l'IP de l'utilisateur
    $remoteip = $_SERVER['REMOTE_ADDR'];
    
    $api_url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response."&remoteip=".$remoteip ;
    
    $decode = json_decode(file_get_contents($api_url, true), true);

    if ($decode['success'] == true) {
        header('location: register.php?errorRegister=3');
    } else {
        header('location: register.php?errorRegister=4');
    }
    
    $userName = $_POST['registerUserName'];
    $userMail = $_POST['registerEmail'];
    $userPass = hash('sha512', $_POST['registerPassword']);

    $oUser = new Utilisateur();

    // if user already exists
    if ($oUser->isExist($userName, $userPass)) {
        header('location: register.php?errorRegister=1');
    } else {
        $oUser->addNewUser($userName, $userMail, $userPass);

        //redirection to connexion page
        header('location: connexion.php');
    }
}
