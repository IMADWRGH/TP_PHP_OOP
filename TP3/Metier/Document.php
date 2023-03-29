<?php

abstract class Document
{
    protected $reference, $titre;
    public function __construct($reference, $titre)
    {
        $this->reference = $reference;
        $this->titre = $titre;
    }
    public function getReference()
    {
        return $this->reference;
    }
    public function setReference($reference)
    {
        return $this->reference = $reference;
    }
    public function getTitre()
    {
        return $this->titre;
    }
    public function setTitre($titre)
    {
        return $this->titre = $titre;
    }
    abstract public function Description();
}
