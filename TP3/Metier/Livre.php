<?php
include_once 'Documents.php';
class Livre extends Documents
{
    protected $auteur, $nbr_pages;
    public function __construct($code, $titre, $auteur, $nbr_pages)
    {
        parent::__construct($code, $titre);
        $this->auteur = $auteur;
        $this->nbr_pages = $nbr_pages;
    }
    public function getAuteur()
    {
        return $this->auteur;
    }
    public function setAuteur($auteur)
    {
        return $this->auteur = $auteur;
    }
    public function getNbr_pages()
    {
        return $this->nbr_pages;
    }
    public function setNbr_pages($nbr_pages)
    {
        return $this->nbr_pages = $nbr_pages;
    }
    public function __toString()
    {
        return parent::__toString() . '|  Auteur :  ' . $this->auteur . '|  Nombre de pages :  ' . $this->nbr_pages .  '</br>';
    }
}
