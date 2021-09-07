<?php
session_start();
if (isset($_SESSION['id'])){
    echo "Hello".$_SESSION['email'];
} 
else{
    echo "Hello Guest";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body style="background: rgb(219, 218, 217);">
        
    <div class="container" >
      <div  class="row d-flex justify-content-center">
        <div class="col-lg-4" >
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h1 class="text-center"><u>LOGIN</u></h1>
            </div>
            <div class="panel-body">
              <p class="text-center">Login to make a purchase.</p>
              <form>
                <div class="form-label-group">
                  
                  <label for="inputEmail">email</label>
                  <input type="email" class="form-control" placeholder="Email address" required autofocus>
                </div><br>
                <div class="form-label-group">
                  
                  <label for="inputPassword">Password</label>
                  <input type="password" class="form-control" placeholder="Password" required>
                </div><br>
                <div class="checkbox mb-3">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                </div>
                
                <button class="btn btn-lg btn-primary btn-block" type="submit" > <a href="product.html" style="color: white">Login</a></button>
                
              </form>
            </div><br>
            <div class="panel-footer">
                <p>Don't have an account?<a href="signup.php">Register</a></p>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  <br><br><br><br><br>
 
  <footer>
    <div class="container">
      <p class="para">
        copyright &copy; Lifestyle Store. All rights are reserved | Contact us: shreyaag27@gmail.com
      </p>
    </div>
  </footer>
</body>
</html>