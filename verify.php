<?php
include("config.php");


if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $otp = rand(1000, 9999);  
    
    if ($email) {  
        $check = mail($email, "OTP verification", "Hey, thank you for registration. Your OTP for verification of email is $otp", "From:noumanyt2003@gmail.com");

        if ($check) {
            echo "success";
        } else {
            echo "fail";
        }
        }
    }
?>
