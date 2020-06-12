<!-- ***** Breadcrumb Area Start ***** -->

<div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(<?=base_url('assets/')?>img/bg-img/12.jpg);">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12">
        <h2 class="title">Career</h2>
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
            <li class="breadcrumb-item active" aria-current="page">Career</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- ***** Breadcrumb Area End ***** -->

<!-- ***** Careers Area Start ***** -->
<section class="dento-Careers-area mt-50 mb-50">
  <div class="container">
    <div class="row">
      <?php
        foreach ($career as  $value) {
          // code...

       ?>
      <!-- Single Career Area -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="single-service--area text-center mb-50">

          <a href="<?=base_url("home/career_appy/").$value['job_title']?>" class="font-weight-bold"><?=$value['job_title']?></a>
          <?=$value['job_descriptions']?>
            <a href="<?=base_url("home/career_appy/").$value['job_title']?>" class="btn dento-btn booking-btn">Apply Now</a>
        </div>
      </div>
<?php } ?>
      <!-- Single Career Area -->

    </div>
  </div>
</section>
<!-- ***** Careers Area End ***** -->
