<?php

class Train{
    public $brand;
    private $milage;
    public $trackGauge;


    function __construct($brand, $milage, $trackGauge){
        $this->brand=$brand;
        $this->milage=$milage;
        $this->trackGauge=$trackGauge;
    }

    function __destruct(){
        echo $this->brand . ' is dead at mileage ' . $this->milage. "<br>";
    }

    public function increaseMileage($amount){
        $this->milage += $amount;
    }
    static function makeNoise(){
        echo  "<br><br>" . " Choo, Choo! " . "<br><br>";
    }
}