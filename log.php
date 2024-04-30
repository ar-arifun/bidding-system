<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/product.css">
  <title>Document</title>
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
        <a href="log.php">LOG</a>
        <a href="profile.php">PROFILE</a>
        <a href="login.php">LOGIN/SIGNUP</a>
      </div>
    </div>
</section>
  <div class="product">

  <?php
       include("./db.php");

       $get_w = "SELECT * FROM item order by id desc";
       $run_w = mysqli_query($con, $get_w);
       $i=0;
       while($row_w=mysqli_fetch_array($run_w)){
        $id = $row_w['id'];
        $pname = $row_w['pname'];
        $pcata= $row_w['pcata'];
        $price = $row_w['price'];
        $img1 = $row_w['img1'];
        $img2 = $row_w['img2'];
        $img3 = $row_w['img3'];
        $img4 = $row_w['img4'];
        $discription = $row_w['dis'];
        ?>




    <div class="card" style="width: 23rem;">
        <img src="<?php echo $img1 ?>"class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $pname . "(" . $pcata . ")" ?></h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Hight Price <?php echo $price ?>TAKA</li>
          <li class="list-group-item">Next Bidding Prize</li>
          <li class="list-group-item">
            <form action="log.php" method="post" enctype="multipart/form-data">
               <input type="text" placeholder="Given Price"> <button type="submit" >Submit</button>
            </form>
          </li>
        </ul>
        <div class="card-body">
          <a href="details.php" class="card-link">Details</a>
          <a href="https://www.bing.com/search?pglt=41&q=vip+car+imag&cvid=0773eeabc8f8475ab18bcc33187115fb&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIGCAEQABhAMgYIAhAAGEDSAQg2ODY1ajBqMagCCLACAQ&FORM=ANNTA1&adppc=EDGEDBB&PC=EDGEDBB" target="blank" class="card-link">Another link</a>
        </div>
      </div>

<?php
       }

?>



      <div class="card" style="width: 23rem;">
        <img src="./img/0x0.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Hight Price 15000$</li>
          <li class="list-group-item">Next Bidding Prize</li>
          <li class="list-group-item">
            <form action="">
               <input type="text" placeholder="Given Price"> <button type="submit"> Submit</button>
            </form>
          </li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Details</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>




      <div class="card" style="width: 23rem;">
        <img src="./img/24ZX1002L-40RGY1DRS3CG-A.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Hight Price 15000$</li>
          <li class="list-group-item">Next Bidding Prize</li>
          <li class="list-group-item">
            <form action="">
               <input type="text" placeholder="Given Price"> <button type="submit"> Submit</button>
            </form>
          </li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Details</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>



      <div class="card" style="width: 23rem;">
        <img src="./img/hypersport.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Hight Price 15000$</li>
          <li class="list-group-item">Next Bidding Prize</li>
          <li class="list-group-item">
            <form action="">
               <input type="text" placeholder="Given Price"> <button type="submit"> Submit</button>
            </form>
          </li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Details </a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>




</div>





<section class="footer">
  <!-- footer section start -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="index.html"><img src="https://logo-download.com/wp-content/data/images/2021/08/Levi_Strauss__Co.-Logo.png" alt="" class="img-fluid logo-footer"></a>
                    <div class="footer-about">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,  </p>
                    </div>

        </div>
        <div class="col-md-3">
          <div class="useful-link">
            <h2>Useful Links</h2>
            <img src="./assets/images/about/home_line.png" alt="" class="img-fluid">
            <div class="use-links">
              <li><a href="index.html"><i class="fa-solid fa-angles-right"></i> Home</a></li>
              <li><a href="about.html"><i class="fa-solid fa-angles-right"></i> About Us</a></li>
              <li><a href="gallery.html"><i class="fa-solid fa-angles-right"></i> Gallery</a></li>
              <li><a href="contact.html"><i class="fa-solid fa-angles-right"></i> Contact</a></li>
            </div>
          </div>

        </div>
                  <div class="col-md-3">
                      <div class="social-links">
            <h2>Follow Us</h2>
            <img src="./assets/images/about/home_line.png" alt="">
            <div class="social-icons">
              <li><a href=""><i class="fa-brands fa-facebook-f"></i> Facebook</a></li>
              <li><a href=""><i class="fa-brands fa-instagram"></i> Instagram</a></li>
              <li><a href=""><i class="fa-brands fa-linkedin-in"></i> Linkedin</a></li>
            </div>
          </div>
                  

                  </div>
        <div class="col-md-3">
          <div class="address">
            <h2>Address</h2>
            <img src="./assets/images/about/home_line.png" alt="" class="img-fluid">
            <div class="address-links">
              <li class="address1"><i class="fa-solid fa-location-dot"></i> Kolathur ramankulam-
                Malappuram Dt 
                 Kerala 679338</li>
                 <li><a href=""><i class="fa-solid fa-phone"></i> +91 90904500112</a></li>
                 <li><a href=""><i class="fa-solid fa-envelope"></i> mail@1234567.com</a></li>
            </div>
          </div>
        </div>
                
      </div>
    </div>

  </footer>
  <!-- footer section end -->
  <!-- footer copy right section start -->
  <section id="copy-right">
    <div class="copy-right-sec"><i class="fa-solid fa-copyright"></i>  
      lorem ispum lorem ispum 2022 Powerd By <a href="#">lorem ispum</a> 


    </div>

  </section>
  <!-- footer copy right section end -->
</section>
</body>
</html>