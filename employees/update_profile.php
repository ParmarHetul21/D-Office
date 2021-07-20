<?php 
    include("./pdo_helpers.php");
    
    $fullname      =    $_REQUEST["fullname"];
    $email         =    $_REQUEST["email"];
    $mobile        =    $_REQUEST["mobile"];
    $dob           =    $_REQUEST["date"];
    $gender        =    $_REQUEST["gender"];
    $qualification =    $_REQUEST["qua"];
    $experience    =    $_REQUEST["exp"];
    $address       =    $_REQUEST["address"];
    $city          =    $_REQUEST["city"];

        $result = updateprofile($fullname,$email,$mobile,$dob,$gender,$qualification,$experience,$address,$city);
        
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