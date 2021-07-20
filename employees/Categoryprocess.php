<?php
    include("./pdo_helpers.php");
    
    $addname = $_REQUEST['addname'];
    
    $result = addCategories($addname);   
    
    header("Content-Type: application/json; charset=UTF-8");
    
    if($result > 0){
        echo json_encode(array("success"=>true));
    }   
    else
    {
        echo json_encode(array("fail"=>false));
    }
?>