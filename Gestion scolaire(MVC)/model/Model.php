<?php
abstract class Model extends PDO
{
    public   $id = 0;
    private static $pdo = null;
    public function __construct()
    {
        // self::$pdo = new PDO('mysql:host=' . $server . ';dbname=' . $dbname, $user, $password);
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
