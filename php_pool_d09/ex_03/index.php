<?php

session_start();

if($_GET['name'] == NULL && $_SESSION['name'] != NULL){
    echo "Hello" . " " . $_SESSION['name'];
}
elseif($_GET['name'] == NULL){
    echo "Hello platypus";
}
else{
    $_SESSION['name'] = $_GET['name'];
    echo "Hello" . " " . $_GET['name'];
}
?>
