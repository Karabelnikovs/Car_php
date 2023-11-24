<?php
include "car.php";
$car = new Car("mercedes", 23556);
$car2 = new Car("suzuki", 12);
$car2->increaseMileage(240);
var_dump($car2);

?>