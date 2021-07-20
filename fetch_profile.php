<?php 
    session_start();

    $id = $_SESSION['UserID'];
    include("./pdo_helpers.php");
      
    header("Content-Type: application/json; charset=UTF-8");
    echo getprofile($id);
?>