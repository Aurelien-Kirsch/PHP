<?php

namespace chocolate{

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
}

namespace planet {

    class Mars{

        private $size;

        public function __construct($size){
           $this->size = $size;
        }
        public function getSize(){
            return $this->size;
        }
        public function setSize($new_size){
            if($new_size > 0){
                $this->size = $new_size;
            }
        }
    }
}
