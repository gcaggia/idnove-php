<?php 
	//Paramètres de connection sur le ftp :
	$PARAM_hote        = 'localhost'; // le chemin vers le serveur
	$PARAM_dbname      = 'idnove';    // le nom de votre base de données
	$PARAM_utilisateur = 'pdo';       // nom d'utilisateur pour se connecter
	$PARAM_mot_passe   = 'pdo123';    // mot de passe de l'utilisateur pour se connecter
	
	try {
		$oPDO = new PDO("mysql:host=$PARAM_hote;dbname=$PARAM_dbname;charset=utf8"
			            , $PARAM_utilisateur
		                , $PARAM_mot_passe);
	}
	catch(Exception $e) {
		die('error : '. $e->getMessage());
	}

	/*foreach($oPDO->query('SELECT * FROM utilisateur') as $row) {
    	echo $row['ID'].' '.$row['username'].' '.$row['userpass']; //etc...
    }*/

    //echo "<p>" . $_SERVER['DOCUMENT_ROOT'] . "</p>";
?>