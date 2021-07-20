<?php
include("./pdo_helpers.php");
session_start();
$id = $_SESSION['UserID'];

header("Content-Type: application/json; charset=UTF-8");
    
    echo getprofile($id);

?>