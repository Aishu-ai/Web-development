<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) {
header('location: products.php');
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>LifeStyle Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include'includes/header.php'
        // put your code here
        ?>
        <div id="banner-image">
            <div class="container">
                
                <div id="banner_content">
                    
                    <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
                </div>
           
        </div>  
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 thumbnail">
                    <img src="img/1.jpg" alt="Camera">
                    <div class="caption">
                        <center><h3><b>Cameras</b></h3>
                        <p>Choose among the best available in the world.</p></center>
                    </div>
                </div>
                <div class="col-sm-4 thumbnail">
                    <img src="img/7.jpg" alt="Watches">
                    <div class="caption">
                        <center><h3><b>Watches</b></h3>
                            <p>Original watches from the best brands.</p></center>
                    </div>
                </div>
                <div class=" col-sm-4 thumbnail">
                    <img src="img/8.jpg" alt="Shirts">
                    <div class="caption">
                        <center><h3><b>Shirts</b></h3>
                            <p>Our esquisite collection of shirts.</p></center>
                    </div>
                    
                </div>
            </div>
            
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
