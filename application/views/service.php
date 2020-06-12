<div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/12.jpg);">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12">
        <h2 class="title">Service</h2>
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
            <li class="breadcrumb-item active" aria-current="page">Service</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- ***** Breadcrumb Area End ***** -->

<!-- ***** Services Area Start ***** -->
<section class="dento-services-area mt-50 mb-50">
  <div class="container">
    <div class="row">
      <?php

        foreach ($service as $value) {
          // code...

       ?>

      <!-- Single Service Area -->
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="single-service--area text-center mb-50">
          <div class="icon--">
            <img src="<?=base_url("assets/uploads/").$value['image']?>" alt="">
          </div>
          <a href="<?=base_url("home/services/").$value['name']?>" class="font-weight-bold"><?=$value['name']?></a>
          <p><?=$value['short_descriptions']?></p>


            <a class="btn dento-btn booking-btn" type="button" href="<?=base_url("home/services/").$value['name']?>">More Details</a>
        </div>
      </div>
    <?php } ?>


    </div>
  </div>
</section>
