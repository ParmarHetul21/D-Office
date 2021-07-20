<?php
    session_start();
    $id= $_SESSION["UserID"];
    session_unset($type);
    session_destroy();
    header("Location:../admin/admin_login.php"); 
?>