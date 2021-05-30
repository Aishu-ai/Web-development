
<?php
include 'includes/common.php';
$email= mysqli_real_escape_string($con,$_POST['email']);
echo $email;
$password= mysqli_real_escape_string($con, $_POST['password']);
$password= md5($password);
$user_login_query= "SELECT id,email FROM users WHERE email='$email' AND password='$password'";
$user_login_result= mysqli_query($con, $user_login_query) or die(mysqli_error($con));
$num_rows= mysqli_num_rows($user_login_result);
if($num_rows==0){
    echo "Account with entered credentials does not exist";
    
    header('location:login.php');
}
else{
    $row= mysqli_fetch_array($user_login_result);
    $_SESSION['email']=$row['email'];
    $_SESSION['id']=$row['id'];
    header('Location: products.php');
    exit();
}
?>
