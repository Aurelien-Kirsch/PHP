<?php

class Gecko{

    private $name;

    public function __construct($name = NULL){
        if ($name != NULL){
            $this->name = $name;
            echo "Hello !". $name . " " . "!" . "\n";
        }
        else{
            echo "Hello !\n";
        }
    }
    public function __destruct(){
            echo "Bye" . $this->name . " " . "!" . "\n";
    }
    public function getName(){
        echo $this->name;
    }
}