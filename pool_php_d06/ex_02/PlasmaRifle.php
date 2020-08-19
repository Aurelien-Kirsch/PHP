<?php

include("AWeapon.php");

class PlasmaRifle extends AWeapon{

    public function __construct($name, $apcost, $damage){
        $this->name = "plasma Rifle";
        $this->apcost = 5;
        $this->damage = 21;
    }
    public function attack(){
        echo "PIOU" . "\n";
    }
}