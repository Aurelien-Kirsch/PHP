<?php

class Character{

    private $name;
    private $strength;
    private $magic;
    private $intelligence;
    private $life;

    public function __construct($name = "Character", $strength = 0, $magic = 0, $intelligence = 0, $life = 100){
        static $i = 1;
        if ($name == "Character") {
            $this->name = $name . $i;
            $i++;
        } 
        else {
            $this->name = $name;
        }
        $this->strength = $strength;
        $this->magic = $magic;
        $this->intelligence = $intelligence;
        $this->life = $life;
    }

    public function __toString() {
        return "My name is" . " " . $this->name . ".\n";
    }

    public function getName() {
        return $this->name;
    }

    public function getStrength() {
        return $this->strength;
    }

    public function getMagic() {
        return $this->magic;
    }

    public function getIntelligence() {
        return $this->intelligence;
    }
    public function getLife() {
        return $this->life;
    }

    
}