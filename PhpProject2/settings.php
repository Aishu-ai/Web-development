<?php
require 'includes/common.php';
?>
<html>
    <head>
        <title>Settings| Lifestyle Stores</title>
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
                        <h3>Change Password</h3>
                        <form method="post" action="settings_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="old-password" placeholder="Old Password">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="new-password" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="re_new_password" placeholder="Re-type New Password">
                            </div>
                            
                             
                            <button type="Submit" class="btn btn-primary">Change</button>
                            
                                
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

