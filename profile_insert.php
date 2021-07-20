<?php
include("./pdo_helpers.php");
    session_start();
    $fullname = $_REQUEST['name'];
    $mobile   = $_REQUEST['mobile'];
    $dob      = $_REQUEST['dob'];
    $jod      = date('d-m-Y');
    $gender   = $_REQUEST['gender'];
    $pannumber = $_REQUEST['pannumber'];
    $adharnumber = $_REQUEST['adharnumber'];
    $gstnumber = $_REQUEST['gstnumber'];
    $city     = $_REQUEST['city'];
    $address  = $_REQUEST['address'];
    $id = $_SESSION['UserID'];
    $file = "AC".$id;

        $result =  insertprofile($fullname,$mobile,$dob,$jod,$gender,$pannumber,$adharnumber,$gstnumber,$city,$address,$id,$file);
        
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