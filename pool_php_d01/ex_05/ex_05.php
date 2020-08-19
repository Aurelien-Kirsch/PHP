<?php
    function my_swap(&$a, &$b){
        $c = $a;
        $a = $b;
        $b = $c;
    }