<?php

    include("./pdo_helpers.php");

    $id = $_REQUEST["cid2"];

    $result = delete_customer($id);

    if($result > 0)  
    { 
        header("Location : ./customer_list.php");
    }
    else  
    {
            // echo $result;
    }
?>