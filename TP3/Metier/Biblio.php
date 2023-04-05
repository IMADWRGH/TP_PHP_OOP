<?php
include_once '../DAO/DAO.php';
include_once '../Metier/Documents.php';
class Biblio extends DAO
{
    public function __construct($server, $user, $password, $table)
    {
        $dsn = 'mysql:host=' . $server . '; dbname=' . $table;
        $user = 'root';
        $password = '';
        $pdo = new PDO($dsn, $user, $password);
    }
    public function Add(Document $d)
    {
        $data = 'ccc';
        return $this->insert($data);
    }
    public function Up(Document $d)
    {
        $cnd = 1;
        $data = 'ccc';
        return $this->update($data, $cnd);
    }
    public function Dell(Document $d)
    {
        $cnd = 1;
        $data = 'ccc';
        return $this->delete($data, $cnd);
    }
    public function Get(Document $d)
    {
        $cnd = 1;
        $data = 'ccc';
        return $this->select($data, $cnd);
    }
}
