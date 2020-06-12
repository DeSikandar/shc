<!-- ***** Breadcrumb Area Start ***** -->

<div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(<?=base_url('assets/uploads/').$service[0]['image']?>);">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12">
        <h2 class="title">Service Details</h2>
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
            <li class="breadcrumb-item active" aria-current="page">Service Details</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- ***** Breadcrumb Area End ***** -->

<!-- ****** Blog Area Start ******* -->
<section class="dento--blog-area mt-50">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8 mb-100">
        <!-- Blog Details Area -->
        <div class="blog-details-area">
          <img src="<?=base_url('assets/uploads/').$service[0]['image']?>" alt="">

          <h2 class="post-title"><?=$service[0]['name']?></h2>

          <?=$service[0]['long_descriptions']?>


        </div>




      </div>

      <!-- Dento Sidebar Area -->
      <div class="col-12 col-lg-4">
        <div class="dento-sidebar">

          <!-- Single Widget Area -->
          <div class="single-widget-area search-widget">
            <form action="#" method="post">
              <a class="btn dento-btn booking-btn" type="button"  data-toggle="modal" data-target="#form">Inqury Now</a>
            </form>
          </div>

          <!-- Single Widget Area -->
          <div class="single-widget-area catagories-widget">
            <h5 class="widget-title">Social Activities</h5>

            <!-- catagories list -->
            <ul class="catagories-list">
                  <div class="post-share-area mb-30">
                  <a href="#" class="facebook mb-20"><i class="fa fa-facebook"></i> Share</a>
                  <a href="#" class="tweet mb-20"><i class="fa fa-twitter"></i> Tweet</a>
                  <a href="#" class="google-plus"><i class="fa fa-google-plus"></i> Share</a>
                  <a href="#" class="pinterest"><i class="fa fa-pinterest"></i> Share</a>
                </div>
            </ul>
          </div>



        </div>
      </div>
    </div>
  </div>
</section>
