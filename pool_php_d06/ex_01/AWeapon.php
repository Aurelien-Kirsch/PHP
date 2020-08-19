<?php

abstract class AWeapon{

    protected $name;
    protected $apcost;
    protected $damage;
    protected $melee = false;

    public function __construct($name, $apcost, $damage){
        try{
            if($name != is_string($name) OR $apcost != is_int($apcost) OR $damage != is_int($damage)){
                throw new Exception("Error  in AWeapon constructor. Bad parameters.");
            }
            else{
                $this->name = $name;
                $this->apcost = $apcost;
                $this->damage = $damage;
            }
        }
        catch(Exception $e){}
    }
    public function getName(){
        return $this->name;
    }
    public function getApcost(){
        return $this->apcost;
    }
    public function getDamage(){
        return $this->damage;
    }
    public function isMelee(){
        return $this->melee;
    }
    abstract public function attack();
}