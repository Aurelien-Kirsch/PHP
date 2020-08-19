<?php

namespace planet\moon{

    include 'Mars.php';

        class Phobos{

            private $mars;

            public function __construct($mars = NULL){
                if($mars == planet::Mars){
                    $this->mars = $mars;
                    echo "Phobos placed in orbit.";
                }
                else{
                    echo "No planet given.";
                }
            }
            public function getMars(){
                return $this->mars;
            }
        }
}