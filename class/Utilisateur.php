<?php

namespace business;

/**
 * This class is for manage user account
 * @author Guillaume Caggia <guillaume.caggia@gmail.com>
 * @copyright MIT Licence 2015
 * @link www.idnove.com
 */


/**
 * Utilisateur is a class which is used for user connexion
 */
class Utilisateur
{

    // Attributes

    /**
     * This is the ID of the user which is generate by the DBMS
     * @var integer
     */
    private $ID;

    /**
     * This is the username of the user which is a pseudo
     * @var string
     */
    private $username;

    /**
     * This is the password of the user. We use sha1 to hash it
     * @var string
     */
    private $userpass;

    /**
     * This is the mail of the user
     * @var string
     */
    private $usermail;


    // Methods

    /**
     * This is a classic constructor for Utilisateur class
     * @param string $ID ID of the user generate by the database
     * @param string $username Name of the user which is like a pseudo
     * @param string $userpass Password of the user encrypted with sha512 algorithm
     * @param string $usermail Mail of the user, not really used for the moment
     */
    public function __construct($ID = "", $username = "", $userpass = "", $usermail = "")
    {
        $this->ID       = $ID;
        $this->username = $username;
        $this->userpass = $userpass;
        $this->usermail = $usermail;
    }


    /**
     * Magic method of PHP ; is run when writing data to inaccessible properties.
     * @param string $Attribut the name of the attribute to access
     * @return variant the value of the attribute
     */
    public function __get($Attribut)
    {
        return $this->$Attribut;
    }


    /**
     * Magic method of PHP ; is utilized for reading data from inaccessible properties.
     * @param string $Attribut the name of the attribute to change
     * @param string $valeur new value of the attribute
     */
    public function __set($Attribut, $valeur)
    {
        $this->$Attribut = $valeur;
    }


    /**
     * This method is used to authentificate a user with his username and password
     * @param string $username the username of the user which is a pseudo
     * @param string $userpass This is the password of the user hashed by sha1
     * @return boolean true if the couple $username/$userpass is correct else false
     */
    public function isExist($username, $userpass)
    {

        global $oPDO;

        $strSQL = "SELECT *           " .
                  "FROM utilisateur   " .
                  "WHERE username = ? " .
                  "  AND userpass = ? ";


        $rs = $oPDO->prepare($strSQL);
        $rs->execute(array($username, $userpass));
       
        $rs->setFetchMode(PDO::FETCH_OBJ);

        if ($myUser = $rs->fetch()) {
            $this->ID       = $myUser->ID;
            $this->username = $myUser->username;
            $this->userpass = $myUser->userpass;
            $this->usermail = $myUser->usermail;
            $rs->closeCursor();

            return true;
        } else {
            $rs->closeCursor();
            return false;
        }
    }


    /**
     * This method is used to add a new user to the table utilisateur
     * @param string $userName pseudo of the user
     * @param string $userMail mail of the user
     * @param string $userPass password of the user hashed with sha1 method
     * @return boolean true if the user is correctly inserted
     */
    public function addNewUser($userName, $userMail, $userPass)
    {
        global $oPDO;

        $strSQL = "INSERT INTO utilisateur(username, usermail, userpass) " .
                  "VALUES (?, ?, ?) ";

        $rs = $oPDO->prepare($strSQL);
        $rs->execute(array($userName, $userMail, $userPass));
        $rs->closeCursor();
        return true;
    }
}
