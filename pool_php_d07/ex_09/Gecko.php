<?php

class Gecko{

    public $friends = array();
    public $skills;
    
    public function __construct($friends, $skills){
        if(is_array($friends) OR is_null($friends)){
            $this->friends = $friends;
        }
        elseif(is_a($skills)){
            $this->skills = $skills;
        }
    }
}