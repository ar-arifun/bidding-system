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
        <a href="#" >FUTURE AUCTION</a>
        <a href="./log.php">LOG</a>
        <a href="./profile.php">PROFILE</a>
        <a href="login.php">LOGIN/SIGNUP</a>
      </div>
    </div>
</section>
  <div class="container">
    <div class="screen">
      <div class="screen__content">
        <form class="login" action="login.php" method="post" enctype="multipart/form-data">
          <div class="login__field">
            <i class="login__icon fas fa-user"></i>
            <input type="text" class="login__input" name="email" placeholder="User name / Email">
          </div>
          <div class="login__field">
            <i class="login__icon fas fa-lock"></i>
            <input type="password" class="login__input" name="password" placeholder="Password">
          </div>
          <button class="button login__submit" type="submit" name="login">
            <span class="button__text">Log In Now</span>
            <i class="button__icon fas fa-chevron-right"></i>
          </button>				
        </form>
        <div class="social-login">
          <h3>If You are not SIGNUP</h3>
          <div class="social-icons">
            <a href="register.php" class="social-login__icon fab fa-instagram">SIGNUP</a>
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
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass =$_POST['password'];
    
    $sel_user ="SELECT * FROM user WHERE username='$email' OR email='$email' AND password='$pass'";
    $run_user=mysqli_query($con,$sel_user);

    $check_user = mysqli_num_rows($run_user);

    if($check_user==0){
    echo " <script>alert('password or email is worng, please try again')</script>";
    }
    else{
        $_SESSION['email']=$email;
        echo "<script>window.open('./index.php?logged_in=you have successfuly login','_self')</script>";
    }
   
}
?>