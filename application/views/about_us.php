<!-- ***** Breadcrumb Area Start ***** -->
<div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(<?=base_url("assets/")?>img/bg-img/12.jpg);">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12">
        <h2 class="title">About Us</h2>
      </div>
    </div>
  </div>
</div>
<div class="breadcumb--con">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=base_url()?>"><i class="fa fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- ***** Breadcrumb Area End ***** -->

<!-- ****** About Us Area Start ******* -->
<section class="dento-about-us-area mt-70">
  <div class="container">
    <div class="row align-items-center">
      <!-- About Us Thumbnail -->
      <div class="col-12 col-md-6">
        <div class="about-us-thumbnail mb-50">
          <img src="<?=base_url("assets/uploads/").$about_us[0]['image']?>" alt="">
        </div>
      </div>
      <!-- About Content -->
      <div class="col-12 col-md-6">
        <div class="about-us-content mb-50">
          <!-- Section Heading -->
          <div class="section-heading">
            <h2>About Us</h2>
            <div class="line"></div>
          </div>
          <?=$about_us[0]['about']?>

          <!-- Single Skills Area -->
          <div class="single-skills-area mt-30">
            <h6>Experience </h6>
            <div id="bar1" class="barfiller">
              <span class="tip"></span>
              <span class="fill" data-percentage="80"></span>
            </div>
          </div>

          <!-- Single Skills Area -->
          <div class="single-skills-area mt-30">
            <h6>Modern Equipment</h6>
            <div id="bar2" class="barfiller">
              <span class="tip"></span>
              <span class="fill" data-percentage="65"></span>
            </div>
          </div>

          <!-- Single Skills Area -->
          <div class="single-skills-area mt-30">
            <h6>Friendly Staff</h6>
            <div id="bar3" class="barfiller">
              <span class="tip"></span>
              <span class="fill" data-percentage="85"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ****** About Us Area End ****** -->

<div class="container">
  <div class="dento-border clearfix"></div>
</div>

<!-- Cool Facts Area Start -->
<section class="dento-cta-area">
  <div class="container">
    <div class="row">
      <!-- Cool Facts Area -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="single-cta text-center mt-50 mb-100">
          <i class="icon_genius"></i>
          <h2><span class="counter">20</span></h2>
          <h5>Years Of Experience</h5>
        </div>
      </div>

      <!-- Cool Facts Area -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="single-cta text-center mt-50 mb-100">
          <i class="icon_heart_alt"></i>
          <h2><span class="counter">700</span>+</h2>
          <h5>Happy Patients</h5>
        </div>
      </div>

      <!-- Cool Facts Area -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="single-cta text-center mt-50 mb-100">
          <i class="icon_book_alt"></i>
          <h2><span class="counter">120</span></h2>
          <h5>Certificate</h5>
        </div>
      </div>

      <!-- Cool Facts Area -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="single-cta text-center mt-50 mb-100">
          <i class="icon_id"></i>
          <h2><span class="counter">40</span>+</h2>
          <h5>Certificate</h5>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Cool Facts Area End -->

 <!-- ***** Testimonials Area Start ***** -->
<section class="testimonials-area section-padding-100">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- Testimonials Slides -->
        <div class="testimonials-slides owl-carousel">
          <!-- Single Testimonials Slide -->
          <?php

            foreach ($testimonial as $testimonial ) {
              // code...

           ?>
          <!-- Single Testimonials Slide -->
          <div class="single-testimonial-slide d-flex align-items-center">
            <!-- Thumbnail -->
            <div class="testimonial-thumb">
              <img src="<?=base_url("assets/uploads/").$testimonial['image']?>" alt="">
            </div>
            <!-- Content -->
            <div class="testimonial-content">
              <h5 class="text-secondary"><?=$testimonial['descriptions']?></h5>
              <h6 class="text-secondary"><?=$testimonial['person_name']?></h6>
              <p class="text-secondary"><?=$testimonial['person_company']?></p>
            </div>
          </div>
        <?php } ?>

        </div>
      </div>
    </div>
  </div>
</section>
