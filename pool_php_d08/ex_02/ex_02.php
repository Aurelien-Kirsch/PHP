<?php

function my_password_hash($password){
    $a = md5($password);
    $b = uniqid();
    $str = array ("hash" => $a,"salt" => $b);
    return $str;
}

function my_password_verify($password, $salt, $hash){
    if ($password == $hash . $salt){
        echo "true";
    }
    else{
        echo "false";
    }
}