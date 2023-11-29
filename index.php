<?php
include "car.php";
include "Tyre.php";
include "train.php";
$car = new Car("mercedes", 23556);
$car2 = new Car("suzuki", 12);
$car2->increaseMileage(240);
var_dump($car2);

echo Car::$describe;
echo'<br><br><br>';


$type = new Tyre('big', 'winter', 'lowest');


echo'<br><br><br>';

$train = new Train("mercedes", 0, "1m");
$train2 = new Train("ferrari", 12, "2m");
$train2->increaseMileage(240);
echo Train::makeNoise();
?>