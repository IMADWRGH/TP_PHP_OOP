<?php
class Documents
{
    protected $code, $titre;
    public function __construct($code, $titre)
    {
        $this->code = $code;
        $this->titre = $titre;
    }
    public function getCode()
    {
        return $this->code;
    }
    public function setCode($code)
    {
        return $this->code = $code;
    }
    public function getTitre()
    {
        return $this->titre;
    }
    public function setTitre($titre)
    {
        return $this->titre = $titre;
    }
    public function __toString()
    {
        return  'code :' . $this->code . 'Titre :' . $this->titre . '</br>';
    }
}
