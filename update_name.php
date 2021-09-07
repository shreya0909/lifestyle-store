<?php
$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
session_start();
$name = $_GET['name'];
$id = $_SESSION['id'];
$update_name_query = "UPDATE user_detail SET name = '$name' WHERE id = '$user_id'";
$update_name_result = mysqli_query($con, $update_name_query) or die(mysqli_error($con));
echo "Name updated";

?>