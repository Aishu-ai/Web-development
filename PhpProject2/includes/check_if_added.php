<?php
function check_if_added_to_cart($item_id){
    require 'includes/common.php';
    $user_id=$_SESSION['id'];
    $user_query="SELECT * FROM users_products WHERE product_id='$item_id' AND user_id ='$user_id' and
status='Added to cart'";
    $user_query_result= mysqli_query($con, $user_query) or die(mysqli_error($con));
    if(mysqli_num_rows($user_query_result)>=1){
        return 1;
    }
 else {
        return 0;
    }
    
}
?>



