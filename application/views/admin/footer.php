<!-- end page container -->
<!-- end page container -->
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="copywrite-content">
        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
All rights reserved by <a href="https://cybersecuresoft.com/" target="_blank">cybersecuresoft </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
      </div>
    </div>
  </div>
</div>
<!-- ================== BEGIN BASE JS ================== -->
<script src="<?=base_url("assets/")?>/plugins/jquery/jquery-1.9.1.min.js"></script>
<script src="<?=base_url("assets/")?>/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
<script src="<?=base_url("assets/")?>/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
<script src="<?=base_url("assets/")?>/plugins/bootstrap/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
  <script src="<?=base_url("assets/")?>/crossbrowserjs/html5shiv.js"></script>
  <script src="<?=base_url("assets/")?>/crossbrowserjs/respond.min.js"></script>
  <script src="<?=base_url("assets/")?>/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="<?=base_url("assets/")?>/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?=base_url("assets/")?>/plugins/jquery-cookie/jquery.cookie.js"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->

<script src="<?=base_url("assets/")?>/plugins/flot/jquery.flot.min.js"></script>
<script src="<?=base_url("assets/")?>/plugins/flot/jquery.flot.time.min.js"></script>
<script src="<?=base_url("assets/")?>/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="<?=base_url("assets/")?>/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="<?=base_url("assets/")?>/plugins/sparkline/jquery.sparkline.js"></script>
<script src="<?=base_url("assets/")?>/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
<script src="<?=base_url("assets/")?>/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?=base_url("assets/")?>/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?=base_url("assets/")?>/js/dashboard.min.js"></script>
<script src="<?=base_url("assets/")?>/js/apps.min.js"></script>
<?php foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
  $(document).ready(function() {
    App.init();
    Dashboard.init();
  });
</script>

</body>
</html>
