<?php 
    include("./pdo_helpers.php");
    
    session_start();
    $fullname =    $_REQUEST['name'];
    $email =       $_REQUEST['email'];
    $mobile   =    $_REQUEST['mobile'];
    $dob      =    $_REQUEST['dob'];
    $gender   =    $_REQUEST['gender'];
    $pannumber =   $_REQUEST['pannumber'];
    $adharnumber = $_REQUEST['adharnumber'];
    $gstnumber =   $_REQUEST['gstnumber'];
    $city     =    $_REQUEST['city'];
    $address  =    $_REQUEST['address'];
    $id       =    $_SESSION['UserID'];

        $result =  updateprofile($fullname,$email,$mobile,$dob,$gender,$pannumber,$adharnumber,$gstnumber,$city,$address,$id);
        
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