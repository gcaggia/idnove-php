<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'idnove/config.php';

if ((isset($_GET['LogOut'])) && ($_GET['LogOut'] == 1)) {
    unset($_SESSION['utilisateur']);

}

if (isset($_SESSION['utilisateur'])) {
    $oUser = unserialize($_SESSION['utilisateur']);
}

// We call the controller of register.php
require_once $_SERVER['DOCUMENT_ROOT'] . 'idnove/controller/register.php';
