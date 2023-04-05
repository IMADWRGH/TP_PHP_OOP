<?php
class Connexion extends PDO
{
    protected function __construct($dsn, $user, $password)
    {
        parent::__construct($dsn, $user, $password);
    }
    public function UDI($sql)
    {
        return parent::exec($sql);
    }
    public function Select($sql)
    {
        return  parent::query($sql);
    }
}
