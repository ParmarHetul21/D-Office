<?php
include("./pdo_helpers.php");
$id = $_REQUEST["wid1"];
$status = 2;

$result = compelete($id,$status);

header("Content-Type: application/json; charset=UTF-8");
if($result >= 0)  {
    echo json_encode(array("success" => true));
}
else  {
    echo json_encode(array("success" => false));
}

?>