<?php
include("config.php");

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message']; 

        $query = $conn->prepare("INSERT INTO report_data (name, company, email, mobile, message) VALUES (?, ?, ?, ?, ?)");
        if ($query->execute([$name, $company, $email, $mobile, $message])) {
            echo "Your Report/Suggestion has been submitted succesfully";
        } else {
            echo "Sorry, Your Report/Suggestion has not been submitted.";
            echo "Please try again";
        }
    }
?>
