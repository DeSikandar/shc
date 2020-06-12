
  <!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(<?=base_url('assets/')?>img/bg-img/12.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title">Apply Job</h2>
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
              <li class="breadcrumb-item active" aria-current="page">Apply Job</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->



  <!-- Book An Oppointment Area Start -->
  <section class="book-an-oppointment-area mb-100 section-padding-100 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url(<?=base_url("assets/")?>img/bg-img/12.jpg);">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center white">
            <h2>Apply Job</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <!-- Appointment Form -->
          <div class="appointment-form">
            <form action="<?=base_url("home/career_post")?>" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="apply_for" value="<?=$name?>">

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="phone" class="form-control" pattern="[0-9]{10}" placeholder="Your Phone" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="location" class="form-control" placeholder="Your Location">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="job_type" class="form-control" placeholder="Job Type">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="c_job" class="form-control" placeholder="Current job Title">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <input type="text" name="csalary" class="form-control" pattern="[0-9]+" placeholder="Current Salary (INR)">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-30">
                    <span class="selects" class="font-weight-bold"> Select CV File &nbsp;&nbsp; </span>
                    <input type="file" name="cv" size="40" width="100%" class="file wpcf7-form-control wpcf7-file wpcf7-validates-as-required"  accept=".pdf,.doc,.docx,.ppt,.pptx,.odt" aria-required="true" aria-invalid="false">

                    <span class="file-upload-text"> (accepted formats: PDF or word DOC, DOCX) Max size 500KB </span>
                  </div>
                </div>


                <div class="col-12">
                  <div class="form-group mb-30">

                    <textarea  class="form-control" name="message" placeholder="Your Message"></textarea>
                  </div>
                </div>
                <div class="col-12 text-center">
                  <button type="submit" class="btn dento-btn">SEND</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Book An Oppointment Area End -->
