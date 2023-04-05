<?php
include_once './Document.php';
class Biblio
{
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
    public function Modifier_Titre($ref, $titre)
    {
        foreach ($this->liste as $d) {
            if ($ref == $d->getReference()) {
                $d->setTitre($titre);
            }
        }
    }

    public function toutesLesDescriptions()
    {
        foreach ($this->liste as $d)
            $d->Description();
    }
}
