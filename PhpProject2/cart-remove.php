<?php
require 'includes/common.php';
$user_id=$_SESSION['id'];
$id=$_GET['id'];
$user_query="DELETE FROM users_products WHERE user_id='$user_id' AND product_id='$id'";
$user_query_result= mysqli_query($con, $user_query) or die(mysqli_error($con));
header('location:cart.php');
exit();
?>


