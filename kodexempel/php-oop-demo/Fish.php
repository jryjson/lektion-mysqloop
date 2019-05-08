<?php
class Fish extends Animal
{
    private $fins;
    public function __construct($family, $food, $size, $fins)
    {
        $this->fins = $fins;
        parent::__construct($family, $food, $size);
    }

    // Overrides Parent Class
    public function move(){
        echo "Fish moves by fins";
    }


    public function setFins($fins)
    {
        $this->fins = $fins;
    }
    public function getFins()
    {
        return $this->fins;
    }
}
?>
