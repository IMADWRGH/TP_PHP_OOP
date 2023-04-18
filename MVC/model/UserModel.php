<?php
class UserModel extends PDO
{
    private $db;
    public function __construct(PDO $db)
    {
        $info_cnx = file(".env");
        $server = trim(explode("=", $info_cnx[0])[1]);
        $dbname = trim(explode("=", $info_cnx[1])[1]);
        $user = trim(explode("=", $info_cnx[2])[1]);
        $password = trim(explode("=", $info_cnx[3])[1]);
        parent::__construct('mysql:host=' . $server . ';dbname=' . $dbname, $user, $password);
    }

    public function getUserByRole($role)
    {

        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = :role");
        $stmt->execute([$role]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
