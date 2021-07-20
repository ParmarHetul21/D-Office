<?php
include("./pdo_helpers.php");

$id = $_REQUEST["cid"];
$id1 = $_REQUEST["id2"];



header("Content-Type: application/json; charset=UTF-8");

echo fetchwork($id1,$id);


?>