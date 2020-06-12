
  <!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(<?=base_url('assets/')?>img/bg-img/12.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title">FAQ</h2>
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
              <li class="breadcrumb-item active" aria-current="page">FAQ</li>
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

        <!-- Single Service Area -->
        <div class="col-12">
          <div class="single-service--area mb-50">


<?php foreach ($faq as  $value) {
  // code...
 ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$value['id']?>"><?=$value['Questions']?></a>
                </h4>
            </div>
            <div id="collapse<?=$value['id']?>" class="panel-collapse collapse">
                <div class="panel-body">
                  <?=$value['Answer']?>
                </div>
            </div>
        </div>

<?php } ?>

          </div>
        </div>



      </div>
    </div>
  </section>
  <!-- ***** Services Area End ***** -->
