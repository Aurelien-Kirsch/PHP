<?php

include("Animal.php");

class Cat extends Animal{

    private $color;
    protected $legs = 4;
    protected $type = "mammal";

    public function __construct($name, $color){
        if($color = NULL){
        $this->name = $name;   
        $this->color = "grey";
        echo "My name is" . " " . $this->name . " " . "and I am a" . " " . $this->type . " " . "!\n";
        echo $name . " " . ":" . " " . "MEEEOOWWW" . "\n";
        }
        else{
            $this->name = $name;
            $this->color = $color;
            echo "My name is" . " " . $this->name . " " . "and I am a" . " " . $this->type . " " . "!\n";
            echo $name . " " . ":" . " " . "MEEEOOWWW" . "\n";
        }
    }
    public function getColor(){
        return $this->color;
    }
    public function setColor(){
        if($color != NULL){
            $this->color = $color;
        }
    }
    public function meow(){
        echo $this->name . " " . "the" . " " . $this->color . " " . "kitty is meowing." . "\n";    }
}