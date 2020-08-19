<?php

function remove_cookie(){
    setcookie('name', $_COOKIE['name'], time() - 3600);
}