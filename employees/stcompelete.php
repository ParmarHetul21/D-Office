<?php
include("./pdo_helpers.php");
$id = $_REQUEST["cid"];
$id2 = $_REQUEST['id2'];

header("Content-Type: application/json; charset=UTF-8");

echo fetchcompelete($id2,$id);

?>