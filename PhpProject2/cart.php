<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location:signup.php');
    exit();
}

$user_id=$_SESSION['id'];

$user_cart="SELECT p.id,p.product_name,p.price FROM users u,products p,users_products up WHERE u.id=up.user_id AND p.id=up.product_id AND u.id='$user_id'";

$user_cart_result= mysqli_query($con, $user_cart) or die(mysqli_error($con));




?>
<html>
    <head>
        <title>Cart| Lifestyle Stores</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div id="con">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Item Number</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Price</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
    <?php
    if(mysqli_num_rows($user_cart_result)==0){
    echo "Add items to the cart first";
}
else{
    $sum=0;
    //echo $user_id;
    //print_r($array);
    //echo $user_id;

    $id='';
    while ($row=mysqli_fetch_array($user_cart_result)) {
        //echo $row;
        


    
    
    
        $sum=$sum+$row['price'];
        $id.=$row['id'];
        $id.=',';     
        $u=$row['id'];
                ?>
             
    <tr>
        
      
      <th scope="row"></th>
      <td><?php  echo $row['id']; ?></td>
      <td><?php echo $row['product_name']; ?></td>
      <td><?php echo $row['price']; ?></td>
      <td> <a href='cart-remove.php?id=<?php echo $u ;?>'
class="remove_item_link"> Remove</a></td>
      
    </tr>         
                    
                    
                    
                    
   <?php                 
    
    }?>
    <tr>
      <th scope="row"></th>
      <td>Total</td>
      <td>Rs <?php echo $sum ?></td>
      <td><a href='success.php?link=<?php echo $id ?>' class="btn btn-primary" >Confirm Order</a></td>
    </tr>
    </tbody>
            </table>
    
<?php }
    ?>
    
                
            
        </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>



