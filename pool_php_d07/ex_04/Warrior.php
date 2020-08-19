<?php

include_once("Character.php");

class Warrior extends Character{

    protected $name;
    protected $life = 100;
    protected $agility = 10;
    protected $strength = 8;
    protected $wit = 3;
    const CLASSE = "Warrior";

    public function __construct($name){    
		$this->name = $name;
		echo $name . ":" . " " . "I'll engrave my name in the history !" . "\n";		
	}
	public function attack(){    
		echo $this->name . ":" . " " . "I'll crush you with my hammer!" . "\n";
    }
    public function moveRight(){
		echo $this->name . ":" . " " . "moves right like a bad boy." . "\n";
	}
    public function moveLeft(){
		echo $this->name . ":" . " " . "moves left like a bad boy." . "\n";
	}
    public function moveUp(){
		echo $this->name . ":" . " " . "moves up like a bad boy." . "\n";
	}
    public function moveDown(){
		echo $this->name . ":" . " " . "moves down like a bad boy." . "\n";
	}
	public function __destruct(){
        echo $this->name . ":" . " " . "Aarrg I can't believe I'm dead..." . "\n";
    }
}