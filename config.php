<?php
$host="localhost";
$username="root";
$password=NULL;

$conn=new PDO("mysql:host=$host; dbname=nouman_website",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>