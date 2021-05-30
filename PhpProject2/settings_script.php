<?php
require 'includes/common.php';
if(!isset($_SESSION('email'))){
    header('location:index.php');
    exit();
}
$old_password= mysqli_real_escape_string($con, $_POST['old-password']);
$new_password=mysqli_real_escape_string($con, $_POST['new-password']);
$re_new_password=mysqli_real_escape_string($con, $_POST['re_new_password']);
$old_password=md5($old_password);
if(!strcmp($new_password, $re_new_password)){
    
    echo "Re enter the new password.";
}
$user_query="SELECT id FROM users WHERE password='$old_password'";
$user_query_result= mysqli_query($con, $user_query) or die(mysqli_error($con));
if(mysqli_num_rows($user_query_result)==0){
    echo "Password entered does not match.";
    header('location:settings.php');
    exit();
}
else
{
    $email=$_SESSION['email'];
    $new_password= md5($new_password);
    $user_change="UPDATE users SET password='$new_password' WHERE email='$email' ";
    $user_change_result= mysqli_query($con, $user_change) or die(mysqli_error($con));
    echo "Password updated";
    header('location:products.php');
    exit();
}
?>


