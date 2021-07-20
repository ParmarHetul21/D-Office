<?php

    include("./pdo_helpers.php");

    $wid = $_REQUEST['wid'];
    $total_dueamount=0;
    $date = date('d-m-Y');

    $result = upadte_work($wid,$total_dueamount,$date);

    header("Content-Type: application/json; charset=UTF-8");

    if($result > 0)  {
        echo json_encode(array("success" => true));
    }
    else  {
        echo json_encode(array("success" => false));
    }
    
?>