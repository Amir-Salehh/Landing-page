<?php

require_once ("../database/database-pdo.php");

if(isset($_POST['signup'])){
    try {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone'];
        $password = $_POST['password'];
        global $conn ;
        
        if($username == "" or $email == "" or $phone_number == "" or $password == ""){
            header("location:../index.php?sign-up-empty=ok") ;
        }
        else{
            // sql
            $query = "INSERT INTO login SET userName=? , email=? , mobile=? , password=? " ;
            // stmt
            $stmt = $conn->prepare($query) ;
            // bind
            $stmt->bindValue(1, $username);
            $stmt->bindValue(2, $email);
            $stmt->bindValue(3, $phone_number);
            $stmt->bindValue(4, $password);
            // exe
            $stmt->execute();
            echo "account created";
            header("location:../index.php?submit=?");
        }
    }
    catch (PDOException $error){
        echo "errors: ".$error->getMessage() ;
    }
}
