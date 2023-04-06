<?php
include_once 'Documents.php';
class Dictionnaire extends Documents
{
    protected $nbr_definition, $langue;
    public function __construct($code, $titre, $nbr_definition, $langue)
    {
        parent::__construct($code, $titre);
        $this->nbr_definition = $nbr_definition;
        $this->langue = $langue;
    }
    public function getNbr_definition()
    {
        return $this->nbr_definition;
    }
    public function setNbr_definition($nbr_definition)
    {
        return $this->nbr_definition = $nbr_definition;
    }
    public function getLangue()
    {
        return $this->langue;
    }
    public function setLangue($langue)
    {
        return $this->langue = $$langue;
    }
    public function __toString()
    {
        return parent::__toString() . '| La langue :' . $this->langue . '|  Nombre de definitions de mots :  ' . $this->nbr_definition . '</br>';
    }
}
