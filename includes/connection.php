<?php

$database = "sigma2";
$username = "root";
$password = "";

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