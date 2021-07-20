<?php 
    header("Content-Type: application/json; charset=UTF-8");
    include('pdo_helper.php');

    if(isset($_REQUEST['remail']))
    {
        $email     = $_REQUEST['remail'];
        $password  = $_REQUEST['password'];
        $cpassword = $_REQUEST['Confirmpassword'];
        $select    = $_REQUEST['usselect'];

        $result = get_user_id($email);
        if($result)
            echo json_encode(array("success" => false, "message" => "Email is already registered."));
        else
        {
            $result = register_user($email, $password,$select);
            if($result > 0)
                echo json_encode(array("success"=>true));
            else
                echo json_encode(array("success"=>false, "message" => "Could not register."));
        }
    }
    else
        echo json_encode(array("success" => false, "message" => "Please enter proper details."));
        
?>