<?php

class Car{
    public $brand;
    private $milage;
    static $describe= "cars have milage and brand";


    function __construct($brand, $milage){
        $this->brand=$brand;
        $this->milage=$milage;
    }

    function __destruct(){
        echo $this->brand . ' is dead at mileage ' . $this->milage. "<br>";
    }

    public function increaseMileage($amount){
        $this->milage += $amount;
    }
    public function makeNoise(){
        echo  "<br><br>" . "BEEP BEEP!" . "<br><br>";
    }
}