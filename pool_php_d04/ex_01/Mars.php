<?php

class Mars{

    private static $count = 0;
    private $id;

    public function __construct(){
        $this->id = Mars::$count;
        Mars::$count++;
    }
    public function getId(){
        return $this->id;
    }

}