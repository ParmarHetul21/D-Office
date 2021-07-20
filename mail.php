<?php
if(isset($_POST['subject']) && isset($_POST['message']) && isset($_POST['senderName']))
{

        require_once "PHPMailer/PHPMailerAutoload.php";

        $mail = new PHPMailer(true);
        $subject = $_POST['subject'];
        $msg = $_POST['message'];
        $to="vdeveloperhelp@gmail.com";
        $name = $_POST['senderName'];

        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "vdeveloperhelp@gmail.com";
        $mail->Password = "v30041998";
        $mail->SMTPSecure = "ssl";
        $mail->Port = 465;
        $mail->From = $to;
        $mail->FromName = $name;
        $mail->addAddress($to, $name);
        
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $msg;
    if (!$mail->send()) {

    header('Location: contact_us.php');
    
    die;
    }
    else
    {
        header('Location: index.php');    
    }
}
else{
    echo "Value Not Enough !";
}
?>