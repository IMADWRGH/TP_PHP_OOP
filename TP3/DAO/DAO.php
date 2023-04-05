<?php
require './Connexion.php';
class DAO extends Connexion
{
    private $table;
    public function __construct($dsn, $user, $password, $table)
    {
        parent::__construct($dsn, $user, $password);
        $this->table = $table;
    }
    public function setTable($table)
    {
        return
            $this->table = $table;
    }

    public function insert($date)
    {
        $req = 'INSERT INTO ' . $this->table . ' VALUES()';
        return parent::UDI($req);
    }

    public function update($date, $criteres)
    {
        $req = 'UPDATE ' . $this->table . ' SET WHERE ';
        return parent::UDI($req);
    }

    public function delete($criteres = null)
    {
        $req = 'DELETE FROM' . $this->table;
        if ($criteres != null)
            $req = ' WHERE';
        return parent::UDI($req);
    }
    public function select($criteres = null)
    {
        $req = 'SELECT ' . $this->table;
        if ($criteres != null)
            $req = ' WHERE';

        return parent::query($req);
    }
}
