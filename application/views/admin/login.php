<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Login</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="<?=base_url("assets/")?>plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?=base_url("assets/")?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url("assets/")?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?=base_url("assets/")?>/css/animate.min.css" rel="stylesheet" />
	<link href="<?=base_url("assets/")?>/css/style.min.css" rel="stylesheet" />
	<link href="<?=base_url("assets/")?>/css/style-responsive.min.css" rel="stylesheet" />
	<link href="<?=base_url("assets/")?>/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url("assets/")?>/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login bg-black animated fadeInDown">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                    <span class="logo"></span> Admin

                </div>
                <div class="icon">
                    <i class="fa fa-sign-in"></i>
                </div>
            </div>
            <!-- end brand -->
            <div class="login-content">
							<?php if(isset($msg)){
								print('<div class="alert alert-danger" role="alert">
  								'.$msg.'
</div>');
							} ?>
                <form action="" method="POST" class="margin-bottom-0">
                    <div class="form-group m-b-20">
                        <input type="text" class="form-control input-lg inverse-mode no-border" name="email" placeholder="Email Address" required />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" class="form-control input-lg inverse-mode no-border" name="password" placeholder="Password" required />
                    </div>

                    <div class="login-buttons">
                        <button type="submit" name="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- end login -->


        <!-- end theme-panel -->
	</div>
	<!-- end page container -->

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
	<script src="<?=base_url("assets/")?>/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
</body>
</html>
