<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
    exit();
}
$id=$_GET['link'];

$myArray = explode(',', $id);
//$idArray= array_splice($myArray, count($myArray)-1);
//count($myArray);
//print_r($idArray);
//print_r($myArray);
foreach($myArray as $value){
    //echo $value;
    $user_query="UPDATE users_products SET status='Confirmed' WHERE product_id='$value'";
    $user_query_result=mysqli_query($con, $user_query) or die(mysqli_error($con));
    //echo $value;
}
 



?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Success| Lifestyle Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h3>Your order is confirmed. Thank you for shopping with us.
            <a href='products.php'>Click here</a> to purchase any other item.</h3>
    </body>
</html>
