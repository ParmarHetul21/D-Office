<?php
     include('./pdo_helpers.php');

     $username = $_REQUEST["username"];

     $result = get_user_id($username) == false ? false : true;
 
     header("Content-Type: application/json; charset=UTF-8");
 
     if($result){
         echo json_encode(array("success"=>true));
     }
     else{
         echo json_encode(array("success"=>false));
     }
 
?>