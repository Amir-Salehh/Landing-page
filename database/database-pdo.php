<?php
//if your project is on localhost : servername:'host', username:'root', password:'' .
$servername = 'server name';
$username = 'your username';
$password = 'your password';
$dbname = 'name table' ;
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
