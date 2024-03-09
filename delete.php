<?php
require("connection.php");

$uid = $_GET['id'];

$sql = "delete from registration_tb where user_id = '$uid'";

mysqli_query($con,$sql);
header('location:select.php');
?>