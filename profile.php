<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/profile.css">
  <title>Bidding System</title>
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
        <a href="./profile.php">PROFILE</a>
        <a href="login.php">LOGIN/SIGNUP</a>
      </div>
    </div>
</section>



<div class="container rounded bg-white mt-5 mb-5">
  <div class="row">
      <div class="col-md-3 border-right">
          <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
      </div>
      <div class="col-md-5 border-right">
          <div class="p-3 py-5">
              <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4 class="text-right">Profile Settings</h4>
              </div>
              <div class="row mt-2">
                  <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value=""></div>
                  <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div>
              </div>
              <div class="row mt-3">
                  <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                  <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" value=""></div>
                  <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                  <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                  <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                  <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                  <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                  <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>
              </div>
              <div class="row mt-3">
                  <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                  <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
              </div>
              <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="p-3 py-5">
              <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
              <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
              <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
          </div>
      </div>
  </div>
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
              <li><a href="index.php"><i class="fa-solid fa-angles-right"></i> Home</a></li>
              <li><a href="about.php"><i class="fa-solid fa-angles-right"></i> About Us</a></li>
              <li><a href="gallery.php"><i class="fa-solid fa-angles-right"></i> Gallery</a></li>
              <li><a href="contact.php"><i class="fa-solid fa-angles-right"></i> Contact</a></li>
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