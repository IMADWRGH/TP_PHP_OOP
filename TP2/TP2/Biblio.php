<?php
include_once './Document.php';
class Biblio
{
    public function __construct()
    {
    }
    protected $liste = [];
    public function Ajouter(Document $d)
    {
        $this->liste[] = $d;
    }
    public function Afficher()
    {
        foreach ($this->liste as $d)
            $d->Afficher();
    }
    public function Convertir_Nom()
    {
        foreach ($this->liste as $d)
            $d->setTitre(strtoupper($d->getTitre()));
    }
    public function Modifier_Titre($ref, $titre)
    {
        foreach ($this->liste as $d) {
            if ($ref == $d->getReference()) {
                $d->setTitre($titre);
            }
        }
    }
    public function Nbr_livre()
    {
        $nbr_livre = 0;
        foreach ($this->liste as $d) {
            if ($d instanceof Livre) {
                $nbr_livre++;
            }
        }
        echo 'Le nombre de Livres :' . $nbr_livre . '</br></br>';
    }
    public function Afficher_Dictionnaire()
    {
        $nbr_livre = 0;
        foreach ($this->liste as $d) {
            if ($d instanceof Dictionnaire) {
                $d->Afficher();
            }
        }
    }
    public function tousLesAuteurs()
    {
        foreach ($this->liste as $d) {
            if ($d instanceof Livre) {
                echo $d->getReference() . '  L`auteur de Livre :' . $d->getAuteur() . '</br></br>';
            }
        }
    }
    public function toutesLesDescriptions()
    {
        foreach ($this->liste as $d)
            $d->Description();
    }
}
