<?php
    session_start();
    $id= $_SESSION["UserID"];
    session_unset($id);
    session_destroy();
    header("Location:../index.php"); 
?>