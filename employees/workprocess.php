<?php
include("./pdo_helpers.php");

$cid = $_REQUEST["cid"];

//Employee From the user table 
session_start();
$eid = $_SESSION["UserID"];
//Employee ID from Employee table

$eid1 = get_employee_id($eid);
// recieve category id

$catid = $_REQUEST["cat"];
// recieve total amunt
(int)$tamount = $_REQUEST["total_amount"];
(int)$pamount = $_REQUEST["paid_amount"];
// Calculate the due amount
(int)$dueamount = (int)$tamount - (int)$pamount;
//curent Date
$dt1 = new DateTime();
$today = $dt1->format("d-m-Y");
//After one month date
$dt2 = new DateTime("+1 month");
$date = $dt2->format("d-m-Y");
//work comment
$comment = $_REQUEST["comment"];
$result = addwork($cid,$eid1,$catid,$tamount,$pamount,$dueamount,$today,$date,$comment);
header("Content-Type: application/json; charset=UTF-8");
if($result != 0)  {
    echo json_encode(array("success" => true));
}
else  {
    echo json_encode(array("success" => false));
}
?>