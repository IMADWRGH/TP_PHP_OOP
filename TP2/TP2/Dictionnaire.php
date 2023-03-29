<?php
include_once './Document.php';
class Dictionnaire extends Document
{
    protected $nbr_definition;
    public function __construct($reference, $titre, $nbr_definition)
    {
        parent::__construct($reference, $titre);
        $this->nbr_definition = $nbr_definition;
    }
    public function getNbr_definition()
    {
        return $this->nbr_definition;
    }
    public function setNbr_definition($nbr_definition)
    {
        return $this->nbr_definition = $nbr_definition;
    }
    public function Afficher()
    {
        echo 'Reference :' . parent::getReference() . '</br>';
        echo 'Titre :' . parent::getTitre() . '</br>';
        echo 'Nombre de definitions de mots  :' . $this->nbr_definition . '</br>';
        echo '-------------------------------------</br>';
    }
    public function Description()
    {
        echo 'Fiche de bibliothèque dictionnaire </br>';
    }
}
