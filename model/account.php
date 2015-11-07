<?php

if (isset($_SESSION['utilisateur'])) {
    $oUser = unserialize($_SESSION['utilisateur']);
}
else {
    header('location: connexion.php?errorAuth=2');
}
