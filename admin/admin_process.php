<?php
    include("./pdo_helpers.php");

$username = $_REQUEST["fullname"];
$password = $_REQUEST["password"];
$usertype = $_REQUEST["usselect"];


$result = adminlogin($username,$password,$usertype);

header("Content-Type: application/json; charset=UTF-8");

    if($result != false) {
        echo json_encode(array("success" => true,"usertype" => $result));
    }
    else {
        echo json_encode(array("success" => false));
    }


?>