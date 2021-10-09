<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bike = new Bicycle('blue',0);
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
var_dump($bike);



$car = new Car('red', 5, 'fuel');

echo $car->start();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h <br>';
echo $car->forward();
echo '<br> Vitesse de la voiture: ' . $car->getCurrentSpeed() . ' km/h <br>';
echo $car->brake();
echo '<br> Vitesse de la voiture: ' . $car->getCurrentSpeed(). ' km/h' . '<br>';
var_dump($car);



$truck = new Truck(50, 'blue', 3, 'fuel');

echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h <br>';
echo $truck->brake() . '<br>';
echo $truck->load();
var_dump($truck);


