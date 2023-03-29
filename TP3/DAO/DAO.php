<?php
include_once './Connexion.php';
class DAO extends Connexion
{
    private $table;
    public function __construct($dsn, $user, $password, $table)
    {
        Connexion::__construct($dsn, $user, $password);
        $this->table = $table;
    }
    public function setTable($table)
    {
    }

    public function insert($date)
    {
    }

    public function update($date, $criteres)
    {
    }

    public function delete($criteres = null)
    {
    }
    public function select($criteres = null)
    {
    }
}
