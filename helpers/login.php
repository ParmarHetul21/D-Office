<?php 
    include('pdo_helper.php');

    $email = $_REQUEST['lemail'];
    $password = $_REQUEST['password'];
    $usertype = $_REQUEST["usselect"];
    
    $result = login_user($email, $password,$usertype); 
    
    header("Content-Type: application/json; charset=UTF-8");

    if($result != false) {
        echo json_encode(array("success" => true,"usertype" => $result));
    }
    else {
        echo json_encode(array("success" => false));
    }
?>