<?php

class Animal{

function __construct(public $name, private $age){}

    public function birthday(){
        $this->age+=1;
    }

}


?>