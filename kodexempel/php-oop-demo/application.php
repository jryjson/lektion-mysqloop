<?php
require 'Animal.php';
require 'Cow.php';

// Ny klass för Fish
require 'Fish.php';

// Skapar ett objekt av Cow
$cow  = new Cow('Herbivore', 'Grass', '4', '2');

echo "<b>Cow Object</b> <br>";
echo "The Cow belongs to the " . $cow->getFamily() . " family <br>";
echo "and eats " . $cow->getFood() . "<br>";
echo $cow->move() . "<br>";

// Använder set för att ändra värde på en privat variabel
$cow->setOwner('Farmer');

echo "and ownes by " . $cow->getOwner() . "<br>";
// Visar storlek
echo "Size: " . $cow->getSize();
echo "<br><br>";

// Skapar ett objekt av fish
$fish  = new Fish('Water', 'Grass', '4', 'Red');
echo "<b>Fish Object</b> <br>";
echo "The Fish belongs to the " . $fish->getFamily() . " family <br>";
echo "and eats " . $fish->getFood() . "<br>";
echo $fish->move() . "<br>";
echo "Fins: " . $fish->getFins() . "<br>";
?>
