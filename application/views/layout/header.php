<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta name="description" content="Smile Home Health Care">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Smile Home Health Care </title>

  <!-- Favicon -->
  <link rel="icon" href="img/bg-img/logo1.jpg">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="<?=base_url("assets/")?>style.css">

</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="preload-content">
      <div id="dento-load"></div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <!-- Top Content -->
          <div class="col-6 col-md-9 col-lg-8">
            <div class="top-header-content">
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="1st Floor, Office Number - 69, Paras 3, Nr.TEL.EXCH Bopal, Ahmedabad - 3800588"><i class="fa fa-map-marker"></i> <span>1st Floor, Office Number - 69, Paras 3, Nr.TEL.EXCH Bopal, Ahmedabad - 3800588</span></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="info@smilehomehealthcare.com"><i class="fa fa-envelope"></i> <span>info@smilehomehealthcare.com</span></a>
            </div>
          </div>
          <!-- Top Header Social Info -->
          <div class="col-6 col-md-3 col-lg-4">
            <div class="top-header-social-info text-right">
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Top Header End -->

    <!-- Main Header Start -->
    <div class="main-header-area">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Classy Menu -->
          <nav class="classy-navbar justify-content-between" id="dentoNav">

            <!-- Logo -->
            <a class="nav-brand text-dark" href="index.php">  <img src="<?=base_url("assets/")?>img/bg-img/logo1.jpg" alt="">  </a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
<?php $chil_url2 = $this->uri->slash_segment(3);$chil_url = $this->uri->slash_segment(2);?>
            <!-- Menu -->
            <div class="classy-menu">

              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>



              <!-- Nav Start -->
              <div class="classynav">
                <ul id="nav">
                  <li class="active"><a href="<?=base_url()?>">Home</a></li>
                  <li><a href="<?=base_url("home/about_us")?>"> About Us</a></li>
                  <li><a href="<?=base_url("home/services")?>"> Service</a></li>
                  <li><a href="<?=base_url("home/careers")?>"> Career</a></li>
                  <li><a href="<?=base_url("home/faq")?>"> FAQ</a></li>
                  <li><a href="<?=base_url("home/contact")?>">Contact</a></li>
                </ul>
              </div>
              <!-- Nav End -->
            </div>

            <!-- Booking Now Button -->
            <a class="btn dento-btn booking-btn" data-toggle="modal" data-target="#form">Inqury Now</a>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->





<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel" class="font-weight:bold">Inqury Now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?=base_url('home/inqury_insert')?>" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label for="name ">Your Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
          </div>
          <div class="form-group">
            <label for="number">Your Phone Number</label>
            <input type="text" pattern="[0-9]{10}" name="number" class="form-control" id="number" placeholder="Enter mobile number" required>
          </div>
          <div class="form-group">
            <label for="email1">Your Email address</label>
            <input type="email" class="form-control" name="email" id="email1" placeholder="Enter email" required>
          </div>
          <div class="form-group">
            <label for="password1">Address</label>
            <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address" required>
          </div>
          <div class="form-group">
            <label for="inqury">Details of Your Inqury</label>
            <textarea name="message" class="form-control" spellcheck="false" placeholder="Enter Message" required></textarea>
          </div>
        </div>
        <input type="hidden" name="service" value="<?php
        if($chil_url2!=="/"){
          print("inqury for ".chop($chil_url2,"/"));
        }else{
          print("from ".chop($chil_url,"/"));
        }

        ?>">
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
