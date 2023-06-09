<?php
include_once __DIR__ . '/../DAO/DAO.php';
include_once 'Documents.php';
include_once 'Livre.php';
include_once 'Dictionnaire.php';
class Biblio extends DAO
{
    public function __construct($server, $user, $password, $db)
    {
        $dsn = 'mysql:host=' . $server . '; dbname=' . $db;
        parent::__construct($dsn, $user, $password);
    }
    public function Add(Documents $d)
    {
        if ($d instanceof Livre) {
            parent::setTable('Livre');
            $data = array('code' => $d->getCode(), 'titre' => $d->getTitre(), 'auteur' => $d->getAuteur(), 'nbr_pages' => $d->getNbr_pages());
        } else {
            parent::setTable('Dictionnaire');
            $data = array('code' => $d->getCode(), 'titre' => $d->getTitre(), 'nbr_definition' => $d->getNbr_definition(), 'langue' => $d->getLangue());
        }
        return $this->insert($data);
    }
    public function Up(Document $d, $criteres)
    {
        if ($d instanceof Livre) {
            parent::setTable('Livre');
            $data = array('code' => $d->getCode(), 'titre' => $d->getTitre(), 'auteur' => $d->getAuteur(), 'nbr_pages' => $d->getNbr_pages());
        } else {
            parent::setTable('Dictionnaire');
            $data = array('code' => $d->getCode(), 'titre' => $d->getTitre(), 'nbr_definition' => $d->getNbr_definition(), 'langue' => $d->getLangue());
        }
        return $this->update($data, $criteres);
    }
    public function Dell(Document $d, $criteres)
    {
        if ($d instanceof Livre) {
            parent::setTable('Livre');
            $data = array('code' => $d->getCode(), 'titre' => $d->getTitre(), 'auteur' => $d->getAuteur(), 'nbr_pages' => $d->getNbr_pages());
        } else {
            parent::setTable('Dictionnaire');
            $data = array('code' => $d->getCode(), 'titre' => $d->getTitre(), 'nbr_definition' => $d->getNbr_definition(), 'langue' => $d->getLangue());
        }
        return $this->delete($data, $criteres);
    }
    public function Get(Document $d, $criteres)
    {
        if ($d instanceof Livre) {
            parent::setTable('Livre');
            $data = array('code' => $d->getCode(), 'titre' => $d->getTitre(), 'auteur' => $d->getAuteur(), 'nbr_pages' => $d->getNbr_pages());
        } else {
            parent::setTable('Dictionnaire');
            $data = array('code' => $d->getCode(), 'titre' => $d->getTitre(), 'nbr_definition' => $d->getNbr_definition(), 'langue' => $d->getLangue());
        }
        return $this->select($data, $criteres);
    }
}
