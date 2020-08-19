<?php

include("Iunit.php");
include("ASpaceMarine.php");

abstract class AMonster implements IUnit{

    protected $name;
    protected $hp = 0;
    protected $ap = 0;
    protected $damage = 0;
    protected $apcost = 0;

    public function __construct($name, $hp, $ap){
        $this->name = $name;
        $this->hp = $hp;
        $this->ap = $ap;
    }

    public function getName(){
        return $this->name;
    }
    public function getHp(){
        return $this->hp;
    }
    public function getAp(){
        return $this->ap;
    }
    public function getDamage(){
        return $this->damage;
    }
    public function getApcost(){
        return $this->apcost;
    }
    public function equip(){
        echo "Monsters are proud and fight with their own bodies" . "\n";
    }
    public function attack($unit){
        try{
            if(!(var_dump($unit instanceof IUnit))){
                throw new Exception("Error in AMonster. Parameter is not an IUnit.");
            }
        }
        catch(Exception $e){}
    }
    public function moveCloseTo($move){
        try{
            if(!(var_dump($move instanceof IUnit))){
                throw new Exception("Error in AMonster. Parameter is not an IUnit.");
            }
        }
        catch(Exception $e){}
        if($move = 0){
            echo $this->name . " " . ":" . "I'm too far away from" . " " . ASpaceMarine::$name . ".\n";
        }
        elseif($move == ASpaceMarine::$move && $this->ap >= $this->apcost){
            $ap - $apcost;
            (ASpaceMarine::$hp) - $damage;
            echo $this->name . " " . "attacks" . " " . ASpaceMarine::$name . ".\n";
        }
        else{
            echo $this->name . " " . "is moving closer to" . " " . ASpaceMarine::$name . ".\n";
        }
    }
    public function receiveDamage($dgt){
        if($this->apcost >= $this->ap){
            $hp - (ASpaceMarine::$damage);
        }
    }
    public function recoverAp(){
        if($ap <= 50){
            $ap + 7;
        }
    }
}