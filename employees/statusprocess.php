<?php

include("./pdo_helpers.php");

$id = $_REQUEST["wid"];
$status = 1;

$result = changestatus($status,$id);

header("Content-Type: application/json; charset=UTF-8");

if($result >= 0)  {
    echo json_encode(array("success" => true));
}
else  {
    echo json_encode(array("success" => false));
}
?>