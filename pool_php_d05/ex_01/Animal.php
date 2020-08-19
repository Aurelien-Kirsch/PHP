<?php

class Animal{

    const MAMMAL = 0;
    const FISH = 1;
    const BIRD = 2;

    protected $name;
    protected $legs;
    protected $type;

    public function __construct($name, $legs, $type){
        if($type == 0){
            $this->name = $name;
            $this->legs = $legs;
            $this->type = "mammal";
            echo "My name is" . " " . $this->name . " " . "and I am a" . " " . $this->type . " " . "!\n";
        }
        elseif($type == 1){
            $this->name = $name;
            $this->legs = $legs;
            $this->type = "fish";
            echo "My name is" . " " . $this->name . " " . "and I am a" . " " . $this->type . " " . "!\n";
        }
        elseif($type == 2){
            $this->name = $name;
            $this->legs = $legs;
            $this->type = "bird";
            echo "My name is" . " " . $this->name . " " . "and I am a" . " " . $this->type . " " . "!\n";
        }
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
}

 