<?php

include("Animal.php");

class Shark extends Animal{

    private $frenzy = false;
    protected $legs = 0;
    protected $type = "fish";

    public function __construct($name){
        $this->name = $name;
        echo "My name is" . " " . $this->name . " " . "and I am a" . " " . $this->type . " " . "!\n";
        echo "A KILLER IS BORN !";
    }
    public function smellBlood(bool $frenzy){
     
    }
    public function status(){
        if($frenzy == true){
            echo $name . " " . "is smelling blood and wants to kill." . "\n";
        }
        else{
            echo $name . " " . "is swimming peacefully." . "\n";
        }      
    }


}