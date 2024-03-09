<?php
require("connection.php");  //important to use


$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$date_of_birth = $_POST['date_of_birth'];
$gender = $_POST['gender'];

$sql ="insert into registration_tb(user_name,email,password,contact,date_of_birth,gender)  
values('$user_name','$email','$password','$contact','$date_of_birth','$gender')";
mysqli_query($con, $sql);


$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql ="insert into login_tb(email,password)  
values('$email','$password')";
mysqli_query($con, $sql);



// echo $sql;
header('location:home.php');

?>

