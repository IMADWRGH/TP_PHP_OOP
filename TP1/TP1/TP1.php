<?php
class Calculette
{
    private  $nbr1;
    private $nbr2;
    public function __construct($n1, $n2)
    {
        $this->nbr1 = $n1;
        $this->nbr2 = $n2;
    }
    function Addition()
    {
        return $this->nbr1 + $this->nbr2;
    }
    function Soustraction()
    {
        return $this->nbr1 - $this->nbr2;
    }
    function Multiplication()
    {
        return $this->nbr1 * $this->nbr2;
    }
    function Division()
    {
        if ($this->nbr2 == 0) {
            echo 'Error';
        } else {
            return $this->nbr1 / $this->nbr2;
        }
    }
}
