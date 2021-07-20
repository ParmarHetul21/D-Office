<?php

include("./pdo_helpers.php");

$id = $_REQUEST['cid'];

header("Content-Type: application/json; charset=UTF-8");
echo cus_getprofile($id);

?>