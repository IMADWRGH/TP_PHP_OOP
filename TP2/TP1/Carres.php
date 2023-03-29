<?php
require './Rectangles.php';
class Carres extends Rectangles
{
    public function __construct($c)
    {
        parent::__construct($c, $c);
    }
    public function Afficher()
    {
        echo ("la surface de Carre  est : " . parent::Surface() . "</br></br>");
        echo (" Le perimetre de Carre est : " . parent::Perimetre());
    }
}
