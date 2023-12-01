<?php
include_once "Animal.php";
class Cat extends Animal{
   
    static function woof(){
        echo "meow";
    }
}