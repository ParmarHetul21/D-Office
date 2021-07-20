<?php 

    include("./pdo_helpers.php");
    header("Content-Type: application/json; charset=UTF-8");
    echo getCategories();
?>