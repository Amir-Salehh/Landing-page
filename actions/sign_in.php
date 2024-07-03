<?php

require_once ("../database/database-pdo.php");

if (isset($_POST['sign_in'])){
    try {
        $key = $_POST['key'];
        $password = $_POST['password'] ;
        global $conn ;
        if($key == "" or $password == ""){
            header("location: ../index.php?sign-in-empty=ok");
        }
        else{
            // sql
            $query = "SELECT * FROM login WHERE ( mobile= :key OR email= :key OR username= :key ) AND (password= :password)" ;
            // stmt
            $stmt = $conn->prepare($query) ;
            // bind
            $stmt->bindValue(":key",$key);
            $stmt->bindValue(":password",$password);
            // exe
            $stmt->execute() ;
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $has_user = $stmt->rowCount();
            if($has_user){
                header("location: ../index.php?findUser=ok");
            }
    
            else{
                header("location: ../index.php?notUser=ok");
            }
        }
    }
    catch(PDOException $error){
        echo "errors: ".$error->getMessage() ;
    }

}
