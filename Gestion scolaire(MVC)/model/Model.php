<?php
abstract class Model extends PDO
{
    public   $id = 0;
    private static $pdo = null;
    public function __construct()
    {
        $chemin = substr($_SERVER['SCRIPT_FILENAME'], 0, -9);
        $info_cnx = file($chemin . '../.env');
        $server = trim(explode("=", $info_cnx[1])[1]);
        $dbname = trim(explode("=", $info_cnx[2])[1]);
        $user = trim(explode("=", $info_cnx[3])[1]);
        $password = trim(explode("=", $info_cnx[4])[1]);
        self::$pdo = new PDO('mysql:host=' . $server . ';dbname=' . $dbname, $user, $password);
    }
    public function save()
    {
        $data = (array) $this;
        if ($this->id == 0) {
            $query = 'INSERT INTO ' . get_class($this) . ' (';
            foreach ($data as $key => $value)
                $query .=  $key . " ,";
            $query = substr($query, 0, -5);
            $query .= ') ';
            $query .= ' VALUES(';
            foreach ($data as $key => $value)
                $query .= " ' " . $value . " ',";
            $query = substr($query, 0, -8);
            $query .= ') ;';

            self::$pdo->exec($query);
        } else {
            $query = 'UPDATE ' . get_class($this) . ' SET ';
            foreach ($data as $key => $value) {
                $query .=  $key;
                $query .= " = ' " . $value . " ',  ";
            }
            $query = substr($query, 0, -3);
            $query .= ' WHERE  id=' . $this->id;

            self::$pdo->exec($query);
        }
    }
    public function delete()
    {
        $query = 'DELETE FROM ' . get_class($this) . ' WHERE id=' . $this->id;
        self::$pdo->exec($query);
    }
    public static function find($id)
    {
        $class = get_called_class();
        $object = new $class;
        $query = 'SELECT * FROM ' . $class . ' WHERE id=' . $id;
        $res = self::$pdo->query($query);
        $result = $res->fetchObject();
        foreach ($result as $key => $value) {
            $object->$key = $value;
        }
        return $object;
    }
    public  static function All()
    {
        $class = get_called_class();
        new $class;
        $query = 'SELECT * FROM ' . $class;
        $res = self::$pdo->query($query);
        return   $res->fetchAll(PDO::FETCH_OBJ);
    }
}
