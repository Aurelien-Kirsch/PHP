<?php


function connect_db($host, $username, $passwd, $port, $db){
    try{
        if ((!$host)||(!$username)||(!$port)||(!$db)){
            echo "Bad params! Usage: php connect_db.php host username password port db\n";
        }
        elseif($host = NULL OR $username = NULL OR $passwd = NULL OR $db = NULL){
            throw new PDOException("Error connexion to DB\n");
        }
        $conn = new PDO("mysql:host=" . $host . ";dbname" . $db . "port=" . $port,  $username, $passwd);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected to db successful\n"; 
    }
    catch(PDOException $e){
        error_log("PDO ERROR", 3, "/home/aurelien/Desktop/pool_php_d08/ex_03/error_log_file.txt");
        echo "Error connexion to DB\n" . $e->getMessage();
    }
}
