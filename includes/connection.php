<?php

$database = "u605544755_sigma2";
$username = "u605544755_sigma2";
$password = "Milan@2022";

try{
    $pdo = new PDO( 
        'mysql:host=localhost;dbname='.$database, 
        $username, 
        $password, 
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") 
    );
} catch (PDOException $e){
    exit('Database error');
}


?>