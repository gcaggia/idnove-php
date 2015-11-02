<?php

require_once $_SERVER['DOCUMENT_ROOT'] . 'idnove/config.php';

if (isset($_SESSION['utilisateur'])) {
    header('location: account.php');
}

// We call the controller of connexion.php
require_once $_SERVER['DOCUMENT_ROOT'] . 'idnove/controller/connexion.php';
