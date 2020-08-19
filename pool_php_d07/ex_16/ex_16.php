<?php

include_once("ex_15.php");

class Scanner{
    public static function scan($soldier) {
        if (get_class($soldier) == "Imperium\Soldier") {
            echo "Praise be, Emperor, Lord." . "\n";
        } else {
            echo "Xenos spotted." . "\n";
        }
    }
}