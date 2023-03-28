<?php
class Message
{
    private $id;
    private $adresse_exp;
    private $sujet;
    private $date_envoi;
    private $contenu;
    private $etat;
    public function __construct($id, $adresse_exp, $sujet, $date_envoi, $contenu, $etat)
    {
        $this->id = $id;
        $this->adresse_exp = $adresse_exp;
        $this->sujet = $sujet;
        $this->date_envoi = $date_envoi;
        $this->contenu = $contenu;
        $this->etat = $etat;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        return $this->id = $id;
    }

    public function getAdresse_exp()
    {
        return $this->adresse_exp;
    }
    public function setAdresse_exp($adresse_exp)
    {
        return $this->adresse_exp = $adresse_exp;
    }

    public function getSujet()
    {
        return $this->sujet;
    }
    public function setSujet($sujet)
    {
        return $this->sujet = $sujet;
    }

    public function getDate_envoi()
    {
        return $this->date_envoi;
    }
    public function setDate_envoi($date_envoi)
    {
        return $this->date_envoi = $date_envoi;
    }
    public function getContenu()
    {
        return $this->contenu;
    }
    public function setContenu($contenu)
    {
        return $this->contenu = $contenu;
    }

    public function getEtat()
    {
        return $this->etat;
    }
    public function setEtat($etat)
    {
        return $this->etat = $etat;
    }
}
