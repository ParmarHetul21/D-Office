<?php

include("./pdo_helpers.php");

session_start();
$id = $_SESSION['UserID'];

$name    = $_REQUEST["fullname"];
$mobile  = $_REQUEST["mobile"];
$bdate   = $_REQUEST["date"];
$gender  = $_REQUEST["gender"];
$qua     = $_REQUEST["qua"];
$exp     = $_REQUEST["exp"]; 
$address = $_REQUEST["address"];
$city    = $_REQUEST["city"];
$jdate   = date('Y/m/d');

$result = empprofile($name,$mobile,$bdate,$gender,$qua,$exp,$address,$city,$jdate,$id);

header("Content-Type: application/json; charset=UTF-8");
    
    if($result > 0){
        echo json_encode(array("success"=>true));
    }
    else{
        echo json_encode(array("success"=>false));
    }


?>