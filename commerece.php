<?php
$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifestyle Store</title>
    <link href="comerce.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="header" class="navbar navbar-inverse navbar-fixed-top">
        <div class="inner-header">
            <div class="logo">
                <a href="commerece.php" style="color: white;">Lifestyle Store</a>
            </div>
            <div class="header-links">
                <a href="login.php" style="color: white;">Login</a>
            </div>
            <div class="header-links">
                <a href="settings.html" style="color: white;">settings</a>
            </div>
            
        </div>
    </div>
    <div class="content">
        <div class="banner-image">
            <div class="container">
                <div class="banner-content">
                    <h1>We sell lifestyle.</h1>
                    <p>Flat 40% OFF on premium brands</p>
                    <a href="product.html" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="items">
                <a href="product.html">
                    <img src="camera.jpg" class="img-thumbnail">
                    <div class="caption">
                        <h2>Cameras</h2>
                        <p>Choose among the best available in the world.</p>
                    </div>
                </a>
            </div>
            <div class="items">
                <a href="product.html">
                    <img src="watch.jpg" class="img-thumbnail">
                    <div class="caption">
                        <h2>Watches</h2>
                        <p>Choose among the best available in the world.</p>
                    </div>
                </a>
            </div>
            <div class="items">
                <a href="product.html">
                    <img src="shirt.jpg" class="img-thumbnail">
                    <div class="caption">
                        <h2>Shirts</h2>
                        <p>Choose among the best available in the world.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <p class="para">
                copyright &copy; Lifestyle Store. All rights are reserved | Contact us: shreyaag27@gmail.com
            </p>
        </div>
    </footer>
</body>

</html>