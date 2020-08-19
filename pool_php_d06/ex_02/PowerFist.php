<?php

include("AWeapon.php");

class PowerFist extends AWeapon{

    protected $melee = true;

    public function __construct($name, $apcost, $damage){
        $this->name = "Power Fist";
        $this->apcost = 8;
        $this->damage = 50;
    }
    public function attack(){
        echo "SBAM" . "\n";
    }
}