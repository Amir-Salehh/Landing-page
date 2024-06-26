<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'login-project' ;
global $conn ;
try{
    $conn = new PDO("mysql: host=$servername ;dbname=" . $dbname ,$username, $password);
    // ----------- set PDO errors -----------
    $conn-> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
//    echo "connected successfully." ;
}
// ----------- show errors -----------
catch(PDOException $error){
    echo "errors : \n\t" . $error->getMessage();
}