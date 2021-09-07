<?php
$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
session_start();

$email = mysqli_real_escape_string($con, $_POST['email']);
$name = mysqli_real_escape_string($con, $_POST['name']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$contact = $_POST['contact'];
$user_detail_query = "insert into user_detail(email, name, contact, password, city, address) values ('$email', '$name', '$contact', '$password', '$city', '$address')";
$user_detail_submit = mysqli_query($con, $user_detail_query) or die(mysqli_error($con));

echo "User successfully inserted";

$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);

?>