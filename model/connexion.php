<?php 

// Here we check if there are $_POST variables from a user connexion attempt
if (isset($_POST['user']) && isset($_POST['password'])) {

    $userName = $_POST['user'];
    $userPass = hash('sha512', $_POST['password']);
    $oUser = new Utilisateur();

    if ($oUser->isExist($userName, $userPass)) {

        $utilisateur = 1;

        // let's create a session variable for the user by serialising the object
        $_SESSION['utilisateur']=serialize($oUser);

        header('location: account.php');

    }
    else {
        header('location: connexion.php?errorAuth=1');
    }
}
