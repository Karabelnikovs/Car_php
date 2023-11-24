<?php

class Car{
    public $brand;
    private $milage;

    function __construct($brand, $mileage){
        $this->brand=$brand;
        $this->mileage=$mileage;
    }

    function __destruct(){
        echo $this->brand . ' is dead at mileage ' . $this->mileage. "<br>";
    }

    public function increaseMileage($amount){
        $this->milage += $amount;
    }
}