<?php
require 'Animal.php';
require 'Cow.php';

// Skapar ett objekt av Cow
$cow  = new Cow('Herbivore', 'Grass', '4');

echo "<b>Cow Object</b> <br>";
echo "The Cow belongs to the " . $cow->getFamily() . " family <br>";
echo "and eats " . $cow->getFood() . "<br>";
echo $cow->move() . "<br>";

// Använder set för att ändra värde på en privat variabel
$cow->setOwner('Farmer');

echo "and ownes by " . $cow->getOwner();
?>
