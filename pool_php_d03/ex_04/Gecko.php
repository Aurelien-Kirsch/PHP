<?php

class Gecko{

    private $name;
    private $age;

    public function __construct($name = NULL, $age = NULL){
        if ($name != NULL){
            $this->name = $name;
            echo "Hello !". $name . " " . "!" . "\n";
        }
        else{
            echo "Hello !\n";
        }
        $this->age = $age;
    }
    public function __destruct(){
            echo "Bye" . $this->name . " " . "!" . "\n";
    }
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function setAge($new_age){
        if ($new_age >= 0){
            $this->age = $new_age;
        }
    }
    public function status(){
        switch ($this->age){
            case 0 :
                echo "Unborn Gecko\n";
            break;
            case 1 :
                case 2 :
                    echo "Baby Gecko\n";
                break;
            case (($this->age) >= 3 && ($this->age) <= 10) :
                echo "Adult Gecko\n";
            break;
            case (($this->age) >= 11 && ($this->age) <= 13) :
                echo "Old Gecko\n";
            break;
            case (($this->age) > 13) :
                echo "Impossible Gecko\n";
            break;
        }
    }
}