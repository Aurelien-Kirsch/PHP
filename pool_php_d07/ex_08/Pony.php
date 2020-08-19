<?php

class Pony
{
    private $gender;
    private $name;
	private $color;
    
    public function __construct($gender, $name, $color){
        $this->gender = $gender;
        $this->name = $name;
		$this->color = $color;
	}
    public function __toString(){
        return "Don't worry, I'm a pony !" . "\n";
    }
    public function __destruct(){
        echo "I'm a dead pony." . "\n";
     }
    public function speak(){
      echo "Hiii hiii hiii" . "\n";
     }
    public function __call($name, $arguments){
		echo "I don't know what to do..." . "\n";
    }
    public function __get($name){
        if (property_exists(get_class($this), $name)){
		    echo "It’s not right to get a private attribute!" . "\n";
            return $this->name;
        }
        else{
            echo "There is no attribute:" . " " . $name . ".\n";
        }
    }
   
    public function __set($gender, $value){
        if (property_exists(get_class($this), $name)){
		    echo "It’s not right to set a private attribute !" . "\n";
            $this->gender = $value;
        }
        else{
            echo "There is no attribute:" . " " . $name . ".\n";
        }
    }
}