<?php

if($_GET['name'] == NULL){
    echo "Hello platypus";
}
else{
    echo "Hello" . " " . $_GET['name'];
}