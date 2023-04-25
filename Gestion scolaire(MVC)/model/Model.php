<?php
abstract class Model extends PDO
{
    public   $id = 0;
    private static $pdo = null;
    public function __construct()
    {
        $info_cnx = file(ROOT . '.env');
        $server = trim(explode("=", $info_cnx[0])[1]);
        $dbname = trim(explode("=", $info_cnx[1])[1]);
        $user = trim(explode("=", $info_cnx[2])[1]);
        $password = trim(explode("=", $info_cnx[3])[1]);
        self::$pdo = new PDO('mysql:host=' . $server . ';dbname=' . $dbname, $user, $password);
    }
    public function save()
    {
    }
    public function delete()
    {
    }
    public static function find($id)
    {
    }
    public  static function All()
    {
    }
}
