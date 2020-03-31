<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('blue');
$rockrider = new Bicycle('yellow');
$tornado = new Bicycle('black');

$theHomer = new Car('grey', 3, 'plutonium');
$pinkSedan = new Car('pink', 5, 'gaz');
$springPolice = new Car('black&white', 4, 'gaz');

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurentSpeed() . ' km/h<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurentSpeed() . ' km/h<br>';

echo $pinkSedan->getColor() . '<br>';
echo $pinkSedan->getEnergy() . '<br>';

echo $springPolice->getColor() . '<br>';
echo $springPolice->getEnergy() . '<br>';

echo $pinkSedan->start();
echo $pinkSedan->forward();
echo '<br> Vitesse du pink sedan ' . $pinkSedan->getCurrentSpeed() . 'km/h<br>';
echo $pinkSedan->brake();
echo '<br> Vitesse du pink sedan ' . $pinkSedan->getCurrentSpeed() . 'km/h<br>';