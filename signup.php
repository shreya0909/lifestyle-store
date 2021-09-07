<?php
session_start();
if (isset($_SESSION['id'])){
    echo "Heloo".$_SESSION['email'];
} 
else{
    echo "Hello Guest";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <title>Lifestyle Store</title>
    <link href="comerce.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</head>

<body style="background: rgb(219, 218, 217);">

    <div class="header" class="navbar navbar-inverse navbar-fixed-top">
        <div class="inner-header">
            <div class="logo">
                <a href="commerece.php" style="color: white;">Lifestyle Store</a>
            </div>
            <div class="header-links">
                <a href="signup.php" style="color: white;">Sign up</a>
            </div>
            <div class="header-links">
                <a href="login.php" style="color: white;">Login</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div  class="row d-flex justify-content-center">
            <div class="col-lg-4">
                <form action="user_registration_script.php" method="post">
                    <h1 class="text-center"><u>SIGN UP</u></h1>
                    <div class="form-group">


                        <label for="inputName">Name</label>
                        <input type="name" class="form-control" id="inputName" placeholder="name">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="inputContact">Contact</label>
                        <input type="number" class="form-control" id="inputContact" placeholder="contact">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="address" class="form-control" id="inputAddress" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <label for="inputCity">City</label>
                        <input type="city" class="form-control" id="inputCity" placeholder="city">
                    </div>

                    <div class="form-group">
                        <label class="form-check-label"><input type="checkbox"> Remember me</label>
                    </div>


                    <button type="submit" class="btn btn-primary"><a href="product.html">Sign in</a></button>

                </form>
            </div>
        </div>
    </div><br>
    <footer>
        <div class="container">
            <p class="para">
                copyright &copy; Lifestyle Store. All rights are reserved | Contact us: shreyaag27@gmail.com
            </p>
        </div>
    </footer>
</body>

</html>