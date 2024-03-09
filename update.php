<?php
require("connection.php");  //important to use

$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$date_of_birth = $_POST['date_of_birth'];
$gender = $_POST['gender'];
$uid = $_POST['user_id'];

$sql ="update registration_tb set user_name='$user_name',email='$email',password='$password',contact='$contact',
date_of_birth='$date_of_birth',gender='$gender' where user_id= '$uid'";
mysqli_query($con, $sql);

echo $sql;
header('location:select.php');

?>