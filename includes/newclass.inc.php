<?php

class Person{
    public $first = "Daniel";
    private $last = "Nielsen";
    private $age = "28";
}



class Pet extends Person {
    public function owner(){
        $a = $this->first;
        return $a;
    }
}