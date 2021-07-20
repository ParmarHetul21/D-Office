<?php
    include("./pdo_helpers.php");
    
    $email    = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $type     = $_REQUEST["usselect"];

    $result = addemployee($email,$password,$type);   
    
    header("Content-Type: application/json; charset=UTF-8");
    
    if($result > 0){
        echo json_encode(array("success"=>true));
    }   
    else
    {
        echo json_encode(array("fail"=>false));
    }
?>