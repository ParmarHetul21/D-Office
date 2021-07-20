<?php

include("./pdo_helpers.php");

$name  = $_REQUEST['fullname'];
$mobile = $_REQUEST['mobile'];
$bdate = $_REQUEST['date'];
$gender = $_REQUEST['gender'];
$qua = $_REQUEST['qua'];
$exp = $_REQUEST['exp']; 
$address = $_REQUEST['address'];
$city = $_REQUEST['city'];
$jdate = date(d/m/y);


$result = empprofile($name,$mobile,$bdate,$gender,$qua,$exp,$address,$city,$jdate);

header("Content-Type: application/json; charset=UTF-8");
    // if($result){
    //     echo json_encode(array("success"=>true));
    // }
    // else{
    //     echo json_encode(array("success"=>false));
    // };


?>