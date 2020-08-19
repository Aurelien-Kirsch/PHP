<?php

include("Animal.php");

class Canary extends Animal{

    private $eggs = 0;
    protected $legs = 2;
    protected $type = "bird";

    public function __construct($name){
        $this->name = $name;
        echo "My name is" . " " . $this->name . " " . "and I am a" . " " . $this->type . " " . "!\n";
        echo "Yellow ans smart ? Here I am !" . "\n";
    }
    public function getEggsCount(){
        return $this->eggs;
    }
    public function layEgg(){
        $this->eggs = $eggs;
        $eggs++;
    }

}