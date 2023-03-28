<?php
class Connexion
{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private static $link = false;
    private function __construct()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "gestion_courriers";
        self::$link = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
    }
    public static function Connect()
    {
        if (!self::$link) {
            new Connexion();
            return self::$link;
        }
    }
}
