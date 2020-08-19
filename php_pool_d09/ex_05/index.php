<?php

session_start();

if($_GET['name'] == NULL && $_COOKIE['name'] != NULL){
    echo "Hello" . " " . $_COOKIE['name'];
}
elseif($_GET['name'] == NULL){
    echo "Hello platypus";
}
else{
    $_COOKIE['name'] = $_GET['name'];
    setcookie('name', $_COOKIE['name'], time() + $time);
    echo "Hello" . " " . $_GET['name'];
}