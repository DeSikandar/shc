<!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(<?=base_url('assets/')?>img/bg-img/12.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title">Contact</h2>
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
              <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <!-- ***** Contact Area Start ***** -->
  <section class="dento-contact-area mt-50 mb-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="google-maps mb-100">


              <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d4121.343833537872!2d72.47263901017327!3d23.03477224579036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sOffice%20Number%20-%2069%2C%20Paras%203%2C%20Nr.TEL.EXCH%20Bopal%2C%20Ahmedabad%20-%203800588!5e0!3m2!1sen!2sin!4v1591782167615!5m2!1sen!2sin"allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- Contact Information -->
        <div class="col-12 col-md-4">
          <div class="contact-information">
            <h5>Address</h5>
            <p>1st Floor, Office Number - 69, Paras 3, Nr.TEL.EXCH Bopal, Ahmedabad - 3800588</p>

            <h5>Phone</h5>
            <p>+91 8155881484</p>

            <h5>Phone</h5>
            <p>+91 7874444608</p>

            <h5>Email</h5>
            <p class="mb-0">info@smilehomehealthcare.com</p>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="col-12 col-md-8">
          <div class="contact-form">
            <!-- Section Heading -->
            <div class="section-heading">
              <h2>Get In Touch</h2>
              <div class="line"></div>
            </div>
            <!-- Form -->
            <form action="<?=base_url('home/contact_post')?>" method="POST">
              <div class="row">
                <div class="col-lg-6">
                  <input type="text" name="name" class="form-control mb-30" placeholder="Your Name">
                </div>
                <div class="col-lg-6">
                  <input type="email" name="email" class="form-control mb-30" placeholder="Your Email">
                </div>
                <div class="col-12">
                  <textarea name="message" class="form-control mb-30" placeholder="Your Message"></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn dento-btn">Send Message</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Contact Area End ***** -->
