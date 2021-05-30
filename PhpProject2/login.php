<?php
require 'includes/common.php'; 
?>

<html>
    <head>
        <title>Login| Lifestyle Stores</title>
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
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                            
                        </div>
                        <div class="panel-body">
                            <p>Login to make a purchase</p>
                            <form method="post" action="login_submit.php">
                             <div class="form-group">
                                 <input type="text" class="form-control" name="email" placeholder="Email"></div>
                            <div class="form-group">     
                                <input type="text" class="form-control" name="password" placeholder="Password"></div>
                                <button type="Submit" class="btn btn-primary">Login</button>
                            </form>     
                            
                        </div>
                        <div class="panel-footer">
                            <p>Don't have an account? <a href="signup.php">Register</a></p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <?php
    include 'includes/footer.php';
    ?>
    </body>
</html>

