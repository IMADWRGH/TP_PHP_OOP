<?php
class Rectangles
{
    protected $x, $y;
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function  Surface()
    {
        return $this->x * $this->y;
    }
    public function  Perimetre()
    {
        return ($this->x + $this->y) * 2;
    }
    public function Afficher()
    {
        echo ("la surface de rectangle est " . self::Surface() . " m² </br>");
        echo ("la Perimetre de rectangle est " . self::Perimetre() . " m²");
    }
    public function __toString()
    {
        return 'Longueur :' . $this->x . '</br> Largeur' . $this->y;
    }
}
