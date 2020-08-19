<?php

interface IUnit{

    public function equip($stuff);
    public function attack($hit);
    public function receiveDamage($pv);
    public function moveCloseTo($move);
    public function recoverAP();

}