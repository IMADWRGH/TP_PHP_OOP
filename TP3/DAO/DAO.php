<?php
include_once('Connexion.php');
class DAO extends Connexion
{
    private $table;
    public function __construct($dsn, $user, $password)
    {
        parent::__construct($dsn, $user, $password);
    }
    public function setTable($table)
    {
        return $this->table = $table;
    }

    public function insert($data)
    {
        $req = "INSERT INTO " . $this->table . " (";
        foreach ($data as $key => $value)
            $req .=  $key . " ,";
        $req = substr($req, 0, -1);
        $req .= ') ';
        $req .= ' VALUES(';
        foreach ($data as $key => $value)
            $req .= " ' " . $value . " ',";
        $req = substr($req, 0, -1);
        $req .= ')';
        echo $req;
        //return parent::UDI($req);
    }

    public function update($data, $criteres)
    {
        $req = 'UPDATE ' . $this->table . "  SET ";
        foreach ($data as $key => $value) {
            $req .=  $key;

            $req .= " = ' " . $value . " ', ";
        }
        $req .= ' WHERE code=' . $criteres;
        echo $req;
        //return parent::UDI($req);
    }

    public function delete($criteres = null)
    {
        $req = 'DELETE FROM  ' . $this->table;
        if ($criteres != null)
            $req .= ' WHERE code=' . $criteres;
        echo $req;
        //return parent::UDI($req);
    }
    public function select($criteres = null)
    {
        $req = 'SELECT  * ' . $this->table;
        if ($criteres != null)
            $req .= ' WHERE code=' . $criteres;
        echo $req;
        //return parent::query($req);
    }
}
