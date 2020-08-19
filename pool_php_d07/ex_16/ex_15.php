<?php

namespace Imperium;

    class Soldier{

        private $hp;
        private $attack;
        private $name;

        function __construct($name, $hp = 50, $attack = 12){
            $this->name = $name;
            $this->hp = $hp;
            $this->attack = $attack;
        }

        public function getName(){
            return $this->name;
        }

        public function getHp(){
            return $this->hp;
        }

        public function getAttack(){
            return $this->attack;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function setHp($hp){
            $this->hp = $hp;
        }

        public function setAttack($attack){
            $this->attack = $attack;
        }

        public function doDamage($soldier){
            $life = $soldier->getHp();
            $soldier->setHp($life - $this->attack);
        }

        function __toString(){
            return $this->name . " " . "the" . " " . __namespace__ . " " . " Space Marine:" . " " . $this->hp . " " . "HP.";
        }
    }

namespace Chaos;

    class Soldier{

        private $hp;
        private $attack;
        private $name;

        function __construct($name, $hp = 70, $attack = 12){
            $this->name = $name;
            $this->hp = $hp;
            $this->attack = $attack;
        }

        public function getName(){
            return $this->name;
        }

        public function getHp(){
            return $this->hp;
        }

        public function getAttack(){
            return $this->attack;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function setHp($hp){
            $this->hp = $hp;
        }

        public function setAttack($attack){
            $this->attack = $attack;
        }

        public function doDamage($soldier){
            $life = $soldier->getHp();
            $soldier->setHp($life - $this->attack);
        }

        function __toString(){
            return $this->name . " " . "the" . " " . __namespace__ . " " . " Space Marine:" . " " . $this->hp . " " . "HP.";
        }
    }
