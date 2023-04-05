<?php
require './Connexion.php';
class DAO extends Connexion
{
    private $table;
    public function __construct($dsn, $user, $password)
    {
        parent::__construct($dsn, $user, $password);
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
