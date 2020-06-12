

  <!-- ***** Welcome Area Start ***** -->
  <section class="welcome-area">
    <!-- Welcome Slides -->
    <div class="welcome-slides owl-carousel">
      <?php  foreach ($slider as  $value) {
        // code...
      ?>
      <!-- Single Welcome Slide -->
      <div class="welcome-welcome-slide bg-img bg-gradient-overlay jarallax" style="background-image: url(<?=base_url('assets/uploads/').$value['image']?>">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <!-- Welcome Text -->
              <div class="welcome-text text-center">
                <h2 data-animation="fadeInUp" data-delay="100ms"><?=$value['title']?></h2>
                <p data-animation="fadeInUp" data-delay="300ms"><?=$value['details']?></p>

              </div>
            </div>
          </div>
        </div>
      </div>
    <?php  }?>


      <!-- break -->
    </div>
  </section>
  <!-- ***** Welcome Area End ***** -->

  <!-- ****** About Us Area Start ******* -->
  <section class="dento-about-us-area section-padding-100-0">
    <div class="container">
      <div class="row align-items-center">
        <!-- About Us Thumbnail -->
        <div class="col-12 col-md-6">
          <div class="about-us-thumbnail mb-50">
            <img src="<?=base_url('assets/uploads/').$about_us[0]['image']?>" alt="">
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

  <!-- Dento Service Area Start -->
  <section class="dento-service-area section-padding-100-0 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('img/bg-img/13.jpg');">
    <div class="container">
      <div class="row align-items-center">
        <!-- Service Content -->
        <div class="col-12 col-lg-6">
          <div class="service-content mb-30">
            <!-- Section Heading -->
            <div class="section-heading white">
              <h2>Our Services</h2>
              <div class="line"></div>
            </div>

            <div class="row">
              <?php

              foreach ($service as $key ) {
                // code...

            ?>
              <!-- Single Service -->
              <div class="col-6 col-md-4">
                <div class="single-service mb-70">
                  <img src="<?=base_url("assets/uploads/").$key['image']?>" alt="">
                  <h6><?=$key['name']?></h6>
                </div>
              </div>
            <?php  }?>

              <!-- Single Service -->

            </div>
          </div>
        </div>

        <!-- Video Area -->
        <div class="col-12 col-lg-6">
          <div class="dento-video-area mb-100">
            <img src="./img/bg-img/01.jpg" alt="">
            <!-- Play Button -->
            <a href="#" class="video-play-button"><i class="fa fa-play" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Dento Service Area End -->





  <!-- ***** Testimonials Area Start ***** -->
  <section class="testimonials-area section-padding-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Testimonials Slides -->
          <div class="testimonials-slides owl-carousel">
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



            <!-- Single Testimonials Slide -->

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Testimonials Area End ***** -->
