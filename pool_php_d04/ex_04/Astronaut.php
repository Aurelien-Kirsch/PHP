<?php

include ('../home/aurelien/Desktop/pool_php_d04/ex_04/Mars.php');

class Astronaut{

    private $name;
    private $snacks;
    private $destination;
    private $id;
    private static $count = 0;
    private $actions;

    public function __construct($name = NULL){
        if ($name != NULL){
            $this->name = $name;
            $this->snacks = 0;
            $this->destination = NULL;
            $this->id = Astronaut::$count;
            $this->actions = $actions;
            echo $name . " " . "ready for launch !" . "\n";
            Astronaut::$count++;

        }
    }
    public function getId(){
        return $this->id;
    }
    public function getDestination(){
        return $this->destination;
    }
    public function getSnacks(){
        return $this->snacks;
    }
    public function doActions($actions){
        if(is_null($this->actions)){
            echo $name . ":" . " " . "Nothing to do." . "\n";
        }
        elseif($this->actions = planet::Mars){
            echo $name . ":" . " " . "started a mission !" . "\n";
        }
        elseif($this->actions = chocolate::Mars){
            Astronaut::$snacks++;
            echo $name . " " . "is eating mars number" . " " . $this->id . "\n";
        }
    }
    public function __destruct(){
        if($this->$actions == $this->destination){
            echo $name . ":" . " " . "Mission aborted !" . "\n";
        }
        elseif(is_null($this->$actions)) {
            echo $name . ":" . " " . "I may have done nothing," . " " . "but I have" . " " . $this->snacks . " " . "Mars to eat at least" . "\n";
        }
    }
}