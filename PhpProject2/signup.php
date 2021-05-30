<?php
require 'includes/common.php';
if(isset($_SESSION['email'])){
    header('location:products.php');
}
?>


<html>
    <head>
        <title>Sign Up| Lifestyle Stores</title>
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
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1>SIGN UP</h1>
                        <form method="post" action="signup_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true" pattern="^[A-Za-z0-9_]{1,15}$">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="password" placeholder="Password" required="true" pattern="?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$


">


                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact" placeholder="Contact" required="true" pattern="^[6-9]\d{9}$">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                            </div>
                            <button type="Submit" class="btn btn-primary">Submit</button>
                            
                                
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>


