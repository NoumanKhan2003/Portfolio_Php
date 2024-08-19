<?php
include("config.php");


if (isset($_POST['firstName'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password']; 
    $category = $_POST['category'];
    $otp = rand(1000, 9999);  
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {  
        $check = mail($email, "OTP verification", "Hey, thank you for registration. Your OTP for verification of email is $otp", "From:noumanyt2003@gmail.com");

        if ($check) {
            echo "success";
        } else {
            echo "fail";
        }
            $query = $conn->prepare("INSERT INTO $category (firstName, lastName, email, mobile, password) VALUES (?, ?, ?, ?, ?)");
            if ($query->execute([$firstName, $lastName, $email, $mobile, $password])) {
                echo "Your registration is Succesfull";
            } else {
                echo "Sorry, there is a problem in your registration. Please try again.";
            }}
        }
?>
