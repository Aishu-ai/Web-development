<?php
require 'includes/common.php';
$email= mysqli_real_escape_string($con,$_POST['email']);
$name=mysqli_real_escape_string($con,$_POST['name']);
$regex_name="/^[A-Za-z0-9_]{1,15}$/";
if(!preg_match($regex_name, $name)){
    echo "Name should contain atmost 15 characters with no special characters except lowercase,uppercase and numbers.";
}
$password=mysqli_real_escape_string($con,$_POST['password']);
if(strlen($password)<8){
    echo "Password should be atleast 8 characters long";
}
$password= md5($password);
$contact=mysqli_real_escape_string($con,$_POST['contact']);
$regex_contact="/^[6-9]\d{9}$/";
if(!preg_match($regex_contact, $contact)){
    echo "Contact numbers should start with 6,7,8,or 9 and should be 10 digits ";
}
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$user_entered_query="SELECT id FROM users WHERE email='$email'";
$user_entered_result= mysqli_query($con, $user_entered_query) or die(mysqli_error($con));
$num_rows= mysqli_num_rows($user_entered_result);

if($num_rows>0){
    echo "Email already exists";
}
else
{
    $user_reg="INSERT INTO users (name,email,contact,city,address,password) values('$name','$email','$contact','$city','$address','$password')"; 
    $user_insert_result=mysqli_query($con,$user_reg) or die(mysqli_error($con));
    
    $_SESSION['id']= mysqli_insert_id($con);
    $_SESSION['email']=$email;
    
    header('location:products.php');
    exit();
    
}

?>


