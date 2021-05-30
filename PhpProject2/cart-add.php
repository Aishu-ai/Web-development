<?php
require 'includes/common.php';
$item_id=$_GET['id'];
$user_id=$_SESSION['id'];
$user_query="INSERT INTO users_products(user_id, product_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$user_query_result= mysqli_query($con, $user_query) or die(mysqli_error($con));
header("location:products.php");


?>



