
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Admin | Dashboard</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
<?php $chil_url = $this->uri->slash_segment(3); $chil_url2 = $this->uri->slash_segment(2); ?>
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?=base_url("assets/")?>/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?=base_url("assets/")?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url("assets/")?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?=base_url("assets/")?>/css/animate.min.css" rel="stylesheet" />
	<link href="<?=base_url("assets/")?>/css/style.min.css" rel="stylesheet" />
	<link href="<?=base_url("assets/")?>/css/style-responsive.min.css" rel="stylesheet" />
	<link href="<?=base_url("assets/")?>/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?=base_url("assets/")?>/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
	<link href="<?=base_url("assets/")?>/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

	<!-- ================== END PAGE LEVEL STYLE ================== -->
	<?php
	foreach($css_files as $file): ?>
		<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	<?php endforeach; ?>
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url("assets/")?>/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>


	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> Admin</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->

				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">


					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">

							<span class="hidden-xs">	<?php
														$user = '';
							              if($this->session->userdata("loged_in")){
							                $user = $this->m_tools->getAdminInfo();
															print_r($user['email']);
														}

															?></span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<li class="arrow"></li>

							<li class="divider"></li>
							<li><a href="<?=base_url("admin/logout")?>">Log Out</a></li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->

		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">

						<div class="info">
							<?php
													$user = '';
													if($this->session->userdata("loged_in")){
														$user = $this->m_tools->getAdminInfo();
														print_r($user['email']);
													}

														?>

						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>


						    <li class="<?= ($chil_url == '/' ) ? 'active' : '' ?>"><a href="<?=base_url('admin/home')?>">Dashboard </a></li>
								<li class="<?= ($chil_url == 'slider/' ) ? 'active' : '' ?>"><a href="<?=base_url("admin/home/slider")?>">Slider</a></li>
								<li class="<?= ($chil_url == 'about_us/' ) ? 'active' : '' ?>"><a href="<?=base_url("admin/home/about_us")?>">About Us</a></li>
								<!-- services -->
								<li class="<?= ($chil_url == 'services/' ) ? 'active' : '' ?>"><a href="<?=base_url("admin/home/services")?>">Services</a></li>
								<li class="<?= ($chil_url == 'testimonial/' ) ? 'active' : '' ?>"><a href="<?=base_url("admin/home/testimonial")?>">Testimonial</a></li>
								<li class="<?= ($chil_url == 'careers/' ) ? 'active' : '' ?>"><a href="<?=base_url("admin/home/careers")?>">Careers</a></li>
								<li class="<?= ($chil_url == 'faq/' ) ? 'active' : '' ?>"><a href="<?=base_url("admin/home/faq")?>">FAQ</a></li>
								<li class="<?= ($chil_url == 'contact_us/' ) ? 'active' : '' ?>"><a href="<?=base_url("admin/home/contact_us")?>">contact_us</a></li>
								<!-- apply_job -->
								<li class="<?= ($chil_url == 'apply_job/' ) ? 'active' : '' ?>"><a href="<?=base_url("admin/home/apply_job")?>">Apply_job</a></li>
								<!-- enquiry -->
								<li class="<?= ($chil_url == 'enquiry/' ) ? 'active' : '' ?>"><a href="<?=base_url("admin/home/enquiry")?>">Enquiry</a></li>

					    <!-- begin sidebar minify button -->
					<!-- <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li> -->
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
