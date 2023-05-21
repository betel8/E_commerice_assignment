<?php
require 'Common.php';
$state=$_POST['state'];
$state= mysqli_real_escape_string($con,$state);
$city=$_POST['city'];
$city= mysqli_real_escape_string($con,$city);
$locality=$_POST['locality'];
$locality= mysqli_real_escape_string($con,$locality);
$pincode=$_POST['pincode'];
$pincode= mysqli_real_escape_string($con,$pincode);

$user_id=$_SESSION['uid'];
$insert_query="delete from users_items where user_id= '$user_id'";
$insert_query_result= mysqli_query($con,$insert_query) or die(mysqli_error($con));

header('location:Products.php?success=<strong>Success!</strong> We have received your message.You will receive an email within 24 hours.');


