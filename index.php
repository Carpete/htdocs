<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="https://kit.fontawesome.com/40cabe5444.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap" rel="stylesheet">
    
    <title>IronLock Bank</title>
</head>
<body>   
<div class="body">     
  <nav id="navbar" class="navbar navbar-expand-lg navbar-custom fixed-top navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href=""><img src="images/frame1.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="collapsibleNavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link fs-5 " href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 text-center" href="#contacts">Contacts</a>
                </li>
                <?php
                  if(isset($_SESSION["useremail"]))
                  {
                ?>
                <li class="nav-item">
                    <a class="nav-link c-custom-iflogin fs-5" href="dashboard.php"><?php echo $_SESSION["useremail"]; ?></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link c-custom-sign-up fs-5 px-4 py-2" href="php_includes/logout.php">LOGOUT</a>
                </li>
            </ul>
                <?php
                  }
                  else
                  {
                ?>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="login.php">Login</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link c-custom-sign-up fs-5 px-4 py-2" href="signup.php">Sign Up</a>
                </li>
            </ul>
              <?php
                  }
              ?>
        </div>
    </div>
</nav>
    <div id="mycarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000" data-bs-pause="hover">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#mycarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#mycarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#mycarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>   
      <div class="carousel-inner">
        <div class="carousel-item active c-item">
          <img src="images/brooke-cagle-tLG2hcpITZE-unsplash.jpg" class="d-block w-100 c-img" alt="...">
          <div class="carousel-caption top-0 mt-4 d-none d-md-block c-block c-custom-caption">
            <p class="fs-1 mt-5 fw-bolder">Welcome to IronLock Bank</p>
            <p>The best online bank ever</p>
            <form>
              <div>
              <input class="col col-md-2 w-25 c-custom-input-email" type="email" placeholder="Enter email">
              <a href="#" class="col col-md-2 c-custom-sign-up px-4 py-2">Start Now</a>
              </div>
            </form>
          </div>
        </div>
        <div class="carousel-item c-item">
          <img src="images/hannah-busing-2toj_4L8M2M-unsplash.jpg" class="d-block w-100 c-img" alt="...">
          <div class="carousel-caption top-0 mt-4 d-none d-md-block c-custom-caption">
            <p class="fs-1 mt-5 fw-bolder">Now avaible on IOS and Android</p>
            <p>Now you can use your favourite online bank in your phone</p>
            <form>
              <div>
              <input class="col col-md-2 w-25 c-custom-input-email" type="email" placeholder="Enter email">
              <a href="#" class="col col-md-2 c-custom-sign-up px-4 py-2">Start Now</a>
              </div>
            </form>
          </div>
        </div>
        <div class="carousel-item c-item">
          <img src="images/markus-winkler-DJoG5GsXfMw-unsplash.jpg" class="d-block w-100 c-img" alt="...">
          <div class="carousel-caption top-0 mt-4 d-none d-md-block c-custom-caption">
            <p class="fs-1 mt-5 fw-bolder">Get free comissions with our credit card</p>
            <p>Usable when sign up is made</p>
            <form>
              <div>
              <input class="col col-md-2 w-25 c-custom-input-email" type="email" placeholder="Enter email">
              <a href="#" class="col col-md-2 c-custom-sign-up px-4 py-2">Start Now</a>
              </div>
            </form>
          </div>    
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#mycarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#mycarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <section class="c-custom-section-mission pb-5">
      <div class="container">
        <div class="row c-custom-mission">
          <div class="col-lg-6 col-md-6">
            <h2 class="fs-1">Our Mission</h2>
            <p class="py-3 c-custom-p">
              Here at IronLock Bank we are commited to provide our customers 
              with the best financial support they can get. 
              Our mission is to offer secure, convenient, 
              and inovative financial solutions to help you achieve your goals 
              and attain financial freedom.
            <br>
              At IronLock Bank we believe in putting our custommers first. 
              We strive to provide a full banking experience that meets your expectations. 
              Our online platafform make it easy for you to access your money and regulate it. 
              Lets make money together. 
            </p>
          </div>
          <div class="col-lg-6 col-md-6">
            <img class="w-100 mt-4" src="images/bernard-hermant-z9AOxTYQBy4-unsplash.jpg">
          </div>
        </div>
      </div>
    </section>
    <section class="c-custom-section-services pb-5">
        <div class="container">
          <div class="row c-custom-services pt-5">
            <div class="col-lg-6 col-md-6">
              <img class="w-100 d-flex justify-content-start pt-2" src="images/absolutvision-82TpEld0_e4-unsplash.jpg">
            </div>
            <div class="col-lg-6 col-md-6 c-custom-learmore">
              <h2 class="text-center fs-1">Services</h2>
              <p class="py-3">We understand that everyone has different needs when it comes 
                to their finances. That's why we offer a wide range 
                of services to help you manage your money and achieve 
                your financial goals. 
                <br>
                Whether you're looking to save 
                for the future, invest in the stock market, or simply 
                keep your money safe and secure, we have the tools 
                and expertise to help you succeed. So if you're ready 
                to take control of your finances and start building a 
                brighter future, come talk to us today."
              </p>
              <div class="text-center py-2">
              <a class="fw-bold fs-6 px-4 py-2" href="#">Learn More &raquo;</a>
              </div>
          </div>
        </div>
    </section>
    <section class="c-custom-section-security">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-grid col-md-6">
            <h2 class="text-center fs-1 c-item-security-h2 d-grid pb-3">Security</h2>
            <p class="pb-5 c-custom-security-p">
              IronLock Bank is committed to providing our customers 
              with the highest level of security possible. 
              We use state-of-the-art technology to protect your 
              personal and financial information, and we are constantly 
              updating our systems to stay ahead of the latest threats. 
              Here are just a few of the security measures we have in place:
            </p>
          </div>
          <div class="col-lg-6 d-lg-grid col-md-6 justify-content-start c-custom-images-security">
            <div class="d-flex">
              <img class="w-auto" src="images/firewalls_logo_site.png">
              <p>
                We have multiple layers of 
                firewalls in place to prevent unauthorized 
                access to our systems.
              </p>
            </div>
            <div class="d-flex">
              <img class="w-auto" src="images/authentication_site.png">
              <p>
                We require multiple forms of identification to access 
                your account, including something you know (like a password) 
                and something you have (like a mobile device).
              </p>  
            </div>
            <div class="d-flex">
              <img class="w-auto" src="images/fraud_detection.png">
              <p>
                Our systems use advanced algorithms to detect suspicious 
                activity, such as unusual login attempts or transactions.

              </p>  
            </div>
            <div class="d-flex">
              <img class="w-auto" src="images/ssl_protection.png">
              <p>
              All data transmitted between your computer and our servers 
              is encrypted using SSL technology, which prevents it from 
              being intercepted and read by hackers.
              </p>  
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="c-custom-section-contacts bg-black">
      <div class="container">
        <div class="row d-grid">
          <div class="col-lg-12 col-md-12 col-sm-12 ">
            <h2 style="color: white;" class="fs-1" id="contacts">Contact Us</h2>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 c-custom-2-div-contacts">
            <p style="color: white;" class="fs-5">
              Having any doubts regarding our services? Don't hesitate to reach us,
              our team of experts is here to help you.            
            </p>
            <a class="w-100" href="#"><img src="images/instagramPng.png"></a>
          </div>
        </div>
      </div>
    </section>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/carousel.js"></script>
</body>
</html>