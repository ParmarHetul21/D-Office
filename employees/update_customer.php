<?php 
    include("./pdo_helpers.php");
    
    $cid =         $_REQUEST['cid'];
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
    

        $result =  cus_updateprofile($cid,$fullname,$email,$mobile,$dob,$gender,$pannumber,$adharnumber,$gstnumber,$city,$address);
        
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