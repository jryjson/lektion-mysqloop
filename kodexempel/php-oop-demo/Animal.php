<?php
/*
1. Lägg till en instansvariabel (egenskap) till konstruktorn
2. Skapa get och set-metoder
 */
class Animal
{
    private $family;
    private $food;
    private $size;
    public function __construct($family, $food, $size)
    {
        $this->family = $family;
        $this->food   = $food;
        $this->size   = $size;
    }

    public function move(){
        echo "Animal moves (in Parent Class)";
    }

    public function getFamily()
    {
        return $this->family;
    }
    public function setFamily($family)
    {
        $this->family = $family;
    }
    public function getFood()
    {
        return $this->food;
    }
    public function setFood($food)
    {
        $this->food = $food;
    }
    public function getSize()
    {
        return $this->size;
    }
    public function setSize($size)
    {
        $this->food = $size;
    }
}
?>
