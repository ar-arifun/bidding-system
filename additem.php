<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
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
</section>
  <section class="from">
    <form action="additem.php" method="post" enctype="multipart/form-data">
      <label for="pname" class="form-label">Name</label>
      <input class="form-control form-control-lg" type="text" placeholder="Name" name="pname" id="pname" aria-label=".form-control-lg example">
       
      <label for="cata" class="form-label">Product Category</label>
      <input class="form-control" type="text" placeholder="Product Category" name="cata" id="cata" aria-label="default input example">

      <label for="price" class="form-label">Price</label> 
      <input class="form-control form-control-sm" type="text" placeholder="Start Price" name="price" id="price" aria-label=".form-control-sm example">
      
      <label for="img1" class="form-label">Image -1</label>
      <input class="form-control form-control-sm" type="file" name="img1" id="img1">
     
      <label for="img2" class="form-label">Image -2</label>
      <input class="form-control form-control-sm" type="file" name="img2" id="img2">
      
      <label for="img3" class="form-label">Image -3</label>
      <input class="form-control form-control-sm" type="file" name="img3" id="img3">
      
      <label for="img4" class="form-label">Image -4</label>
      <input class="form-control form-control-sm" type="file" name="img4" id="img4">
     
      <label for="dis" class="form-label">Description</label>
      <textarea class="form-control form-control-lg" id="dis" cols="5" rows="10" name="dis"></textarea>

      <button type="submit" name="btn" class="btn btn-primary" style="margin:20px;">Insert</button> 
    </form>
  </section>
  



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
</div>
</body>
</html>




<?php
include("./db.php");

// Check if the form is submitted
if(isset($_POST['btn'])) {
    // Escape user inputs for security
    $pname = $con->real_escape_string($_POST['pname']);
    $cata = $con->real_escape_string($_POST['cata']);
    $price = $con->real_escape_string($_POST['price']);
    $dis = $con->real_escape_string($_POST['dis']);

    // File upload handling for images
    $targetDir = "./uploads/"; // Directory where images will be uploaded
    $img1 = $targetDir . basename($_FILES['img1']['name']);
    $img2 = $targetDir . basename($_FILES['img2']['name']);
    $img3 = $targetDir . basename($_FILES['img3']['name']);
    $img4 = $targetDir . basename($_FILES['img4']['name']);

    // Insert data into the database
    $insertQuery = "INSERT INTO item(pname, pcata, price, img1, img2, img3, img4, dis) 
                    VALUES ('$pname','$cata', '$price', '$img1', '$img2', '$img3', '$img4', '$dis')";

    if (mysqli_query($con, $insertQuery)) {
        // Upload images to the specified directory
        move_uploaded_file($_FILES['img1']['tmp_name'], $img1);
        move_uploaded_file($_FILES['img2']['tmp_name'], $img2);
        move_uploaded_file($_FILES['img3']['tmp_name'], $img3);
        move_uploaded_file($_FILES['img4']['tmp_name'], $img4);

            echo "<script>alert('New record created successfully!')</script>";
            echo "<script>window.open('additem.php?view_work','_self')</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            echo "<script>alert('Sorry, there was an error uploading your files.')</script>";
            echo "<script>window.open('additem.php?view_work','_self')</script>";
        }
    } 
    // Close connection
    $con->close();
?>