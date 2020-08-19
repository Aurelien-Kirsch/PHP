<?php

class Astronaut{

    private $name;
    private $snacks;
    private $destination;
    private $id;
    private static $count = 0;

    public function __construct($name = NULL){
        if($name != NULL){
            $this->name = $name;
            $this->snacks = NULL;
            $this->destination = NULL;
            $this->id = Astronaut::$count;
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


}