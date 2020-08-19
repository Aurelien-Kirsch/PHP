<?php


function connect_db($host, $username, $passwd, $port, $db){
    try{
        if($host = NULL OR $username = NULL OR $passwd = NULL OR $db = NULL){
            throw new PDOException("PDO ERROR: <$error> storage in <error_log_file>\n");
        }
        $conn = new PDO("mysql:host=" . $host . ";dbname" . $db . "port=" . $port,  $username, $passwd);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully"; 
    }
    catch(PDOException $e){
        error_log("PDO ERROR", 3, "/home/aurelien/Desktop/pool_php_d08/ex_03/error_log_file.txt");
        echo "PDO ERROR: <$error> storage in <error_log_file>\n" . $e->getMessage();
    }
}
