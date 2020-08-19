<?php

class Animal{

    const MAMMAL = 0;
    const FISH = 1;
    const BIRD = 2;

    protected $name;
    protected $legs;
    protected $type;
    private static $NumberOfAnimalsAlive = 0;
    private static $NumberOfMammals = 0;
    private static $NumberOfFishes = 0;
    private static $NumberOfBirds = 0;

    public function __construct($name, $legs, $type){
        if($type == 0){
            $this->name = $name;
            $this->legs = $legs;
            $this->type = "mammal";
            echo "My name is" . " " . $this->name . " " . "and I am a" . " " . $this->type . " " . "!\n";
            Animal::$NumberOfMammals++;
        }
        elseif($type == 1){
            $this->name = $name;
            $this->legs = $legs;
            $this->type = "fish";
            echo "My name is" . " " . $this->name . " " . "and I am a" . " " . $this->type . " " . "!\n";
            Animal::$NumberOfFishes++;
        }
        elseif($type == 2){
            $this->name = $name;
            $this->legs = $legs;
            $this->type = "bird";
            echo "My name is" . " " . $this->name . " " . "and I am a" . " " . $this->type . " " . "!\n";
            Animal::$NumberOfBirds++;
        }
        Animal::$NumberOfAnimalsAlive++;
    }
    public function getName(){
        return $this->name;
    }
    public function getLegs(){
        return $this->legs;
    }
    public function getType(){
        return $this->type;
    }
    public function setName(){
        if($name != NULL){
            $this->name = $name;
        }
    }
    public function setType(){
        if($type >= 0){
            $this->type = $type;
        }
    }
    public static function getNUmberOfAnimalsAlive(){
        if(Animal::$NumberOfAnimalsAlive == 1){
            echo "There is currently" . " " . Animal::$NumberOfAnimalsAlive . " " . "animal alive in our world." . "\n";
        }
        elseif(Animal::$NumberOfAnimalsAlive > 1){
            echo "There are currently" . " " . Animal::$NumberOfAnimalsAlive . " " . "animals alive in our world." . "\n";
            
        }
    }
    public static function getNumberOfMammals(){
        if(Animal::$NumberOfMammals == 1){
            echo "There is currently" . " " . Animal::$NumberOfMammals . " " . "mammal alive in our world." . "\n";
        }
        elseif(Animal::$NumberOfMammals > 1){
            echo "There is curently" . " " . Animal::$NumberOfMammals . " " . "mammals alive in our world." . "\n";
        }
    }
    public static function getNumberOfFishes(){
        if(Animal::$NumberOfFishes == 1){
            echo "There is currently" . " " . Animal::$NumberOfFishes . " " . "fish alive in our world" . "\n";
        }
        elseif(Animal::$NumberOfFishes > 1){
            echo "There is currently" . " " . Animal::$NumberOfFishes . " " . "fishes alive in our world" . "\n";
        }
    }
    public static function getNumberOfBirds(){
        if(Animal::$NumberOfBirds == 1){
            echo "There is currently" . " " . Animal::$NumberOfBirds . " " . "bird alive in our world" . "\n";
        }
        elseif(Animal::$NumberOfBirds > 1){
            echo "There is currently" . " " . Animal::$NumberOfBirds . " " . "birds alive in our world" . "\n";
        }   
    }
}

 