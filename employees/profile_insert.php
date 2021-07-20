<?php
include("./pdo_helpers.php");

    $fullname = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $mobile   = $_REQUEST['mobile'];
    $dob      = $_REQUEST['dob'];
    $jod      = date("d-m-Y");
    $gender   = $_REQUEST['gender'];
    $pannumber = $_REQUEST['pannumber'];
    $adharnumber = $_REQUEST['adharnumber'];
    $gstnumber = $_REQUEST['gstnumber'];
    $city     = $_REQUEST['city'];
    $address  = $_REQUEST['address'];
    $file = "AC";
    $usertype = "Customer";

        $result =  insertprofile($fullname,$email,$password,$mobile,$dob,$jod,$gender,$pannumber,$adharnumber,$gstnumber,$city,$address,$file,$usertype);
        
        header("Content-Type: application/json; charset=UTF-8");

        if($result > 0) 
        {
            echo json_encode(array("success" => true));
        }
        else 
        {
            echo json_encode(array("success" => false));
        }
?>