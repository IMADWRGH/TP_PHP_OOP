<?php
include_once './Document.php';
class Livre extends Document
{
    protected $auteur, $nbr_pages;
    public function __construct($reference, $titre, $auteur, $nbr_pages)
    {
        parent::__construct($reference, $titre);
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
    public function Afficher()
    {
        echo 'Reference :' . parent::getReference() . '</br>';
        echo 'Titre :' . parent::getTitre() . '</br>';
        echo 'Auteur :' . $this->auteur . '</br>';
        echo 'Nombre de pages :' . $this->nbr_pages . '</br>';
        echo '-------------------------------------</br>';
    }
    public function Description()
    {
        echo ' Reference :  ' . parent::getReference() . '|  Titre :  ' . parent::getTitre() . '|  Auteur :  ' . $this->auteur . '|  Nombre de pages :  ' . $this->nbr_pages .  '</br>';
    }
}
