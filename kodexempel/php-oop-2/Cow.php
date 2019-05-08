<?php
class Cow extends Animal
{
    private $owner;
    private $legs;
    public function __construct($family, $food, $legs)
    {
        $this->legs = $legs;
        parent::__construct($family, $food);
    }

    // Overrides Parent Class
    public function move(){
        echo "Dog moves by legs";
    }


    public function setOwner($owner)
    {
        $this->owner = $owner;
    }
    public function getOwner()
    {
        return $this->owner;
    }
    public function setLegs($legs)
    {
        $this->legs = $legs;
    }
    public function getLegs()
    {
        return $this->legs;
    }
}
?>
