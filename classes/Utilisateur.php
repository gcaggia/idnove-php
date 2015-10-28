<?php 
	
class Utilisateur {

	// Attributs
	private $ID;
	private $username;
	private $userpass;
	private $usermail;


	function __construct($ID = "", $username = "", $userpass = "", $usermail = "") {
		$this->ID       = $ID;
		$this->username = $username;
		$this->userpass = $userpass;
		$this->usermail = $usermail;
	}

	function __get($Attribut) {
		return $this->$Attribut;
	}

	function __set($Attribut, $valeur) {
		$this->$Attribut = $valeur;
	}

	function isExist($username, $userpass) {

		global $oPDO;

		$strSQL = "SELECT *           " .
		          "FROM utilisateur   " .
		          "WHERE username = ? " .
		          "  AND userpass = ? ";


		$rs = $oPDO->prepare($strSQL);
		$rs->execute(array($username, $userpass));
		
		$rs->setFetchMode(PDO::FETCH_OBJ);

		if( $myUser = $rs->fetch() ) {

			$this->ID       = $myUser->ID;
			$this->username = $myUser->username;
			$this->userpass = $myUser->userpass;
			$this->usermail = $myUser->usermail;
			$rs->closeCursor();

			return true;
		}
		else {
			$rs->closeCursor();
			return false;
		}
	}

}	

?>