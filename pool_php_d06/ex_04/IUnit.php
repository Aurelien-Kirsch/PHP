<?php

interface IUnit{

    public function equip($stuff);
    public function attack($unit);
    public function receiveDamage($dgt);
    public function moveCloseTo($move);
    public function recoverAP();

}