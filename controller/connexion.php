<?php

if (isset($_SESSION['utilisateur'])) {
	//redirection to account page
    header('location: account.php');
}

require_once $_SERVER['DOCUMENT_ROOT'] . 'idnove/model/connexion.php';

require_once $_SERVER['DOCUMENT_ROOT'] . 'idnove/view/connexion.php';
