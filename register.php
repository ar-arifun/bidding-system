<?php
session_start();
include("./db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/login.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>Bidding System login</title>
</head>
<body>
  <section class="header">
    <div class="nav">
      <input type="checkbox" id="nav-check">
      <div class="nav-header">
        <div class="nav-title">
         DemoLight
        </div>
      </div>
      <div class="nav-btn">
        <label for="nav-check">
          <span></span>
          <span></span>
          <span></span>
        </label>
      </div>
      
      <div class="nav-links">
        <a href="index.php" >HOME</a>
        <a href="AddItem.php">ADDITEM</a>
        <a href="./futureAction.php" >FUTURE AUCTION</a>
        <a href="log.php">LOG</a>
        <a href="profile.php">PROFILE</a>
        <a href="login.php">LOGIN/SIGNUP</a>
      </div>
    </div>
</section>
  <div class="container">
    <div class="screen">
      <div class="screen__content">
        <form class="login" action="register.php" method="post" enctype="multipart/form-data">
          <div class="login__field">
            <i class="login__icon fas fa-user"></i>
            <input type="text" class="login__input" placeholder="User name " name="name">
          </div>
          <div class="login__field">
            <i class="login__icon fas fa-lock"></i>
            <input type="email" class="login__input" placeholder="Email"  name="email">
          </div>
          <div class="login__field">
            <i class="login__icon fas fa-lock"></i>
            <input type="password" class="login__input" placeholder="Password"  name="password">
          </div>
          <button class="button login__submit" type="submit" name="btn">
            <span class="button__text">SIGNUP NOW</span>
            <i class="button__icon fas fa-chevron-right"></i>
          </button>				
        </form>
        <div class="social-login">
          <h3>If You are SIGNUP</h3>
          <div class="social-icons">
            <a href="login.php" class="social-login__icon fab fa-instagram">Login</a>
          </div>
        </div>
      </div>
      <div class="screen__background">
        <span class="screen__background__shape screen__background__shape4"></span>
        <span class="screen__background__shape screen__background__shape3"></span>		
        <span class="screen__background__shape screen__background__shape2"></span>
        <span class="screen__background__shape screen__background__shape1"></span>
      </div>		
    </div>
  </div>
</body>
</html>

<?php
if(isset($_POST['btn']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
  

		
    $added  = mysqli_query($con,"INSERT INTO user (username, email, password) VALUES ('$name','$email','$password')") or die ("query incorrect");

if($added){
  echo "<script>alert('Work post Complite!')</script>";
  $_SESSION['email']=$email;
   echo "<script>window.open('./index.php?logged_in=you have successfuly login','_self')</script>";
}

else{
  echo "<script>alert('Your register incomplited!')</script>";
  echo "<script>window.open('login.php?view_work','_self')</script>";
}
mysqli_close($con);
}

?>