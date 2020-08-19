<?php

include_once("IMovable.php");

class Character{

    protected $name;
    protected $life = 50;
    protected $agility = 2;
    protected $strength = 2;
    protected $wit = 2;
    const CLASSE = "Character";

    public function __construct($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function getLife(){
        return $this->life;
    }
    public function getAgility(){
        return $this->agility;
    }
    public function getStrength(){
        return $this->strength;
    }
    public function getWit(){
        return $this->wit;
    }
    public function getClasse(){
        return self::CLASSE;
    }
    public function moveRight()
    {
		echo $this->name . ":" . " " . "moves right." . "\n";
	}
    public function moveLeft()
    {
		echo $this->name . ":" . " " . "moves left." . "\n";
	}
    public function moveUp()
    {
		echo $this->name . ":" . " " . "moves up." . "\n";
	}
    public function moveDown()
    {
		echo $this->name . ":" . " " . "moves down." . "\n";
	}
}