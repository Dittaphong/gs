<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<title>ระบบสารสนเทศอาจารย์</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="KingAdmin - Bootstrap Admin Dashboard Theme">
	<meta name="author" content="The Develovers">
	<!-- favicon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.ico">

	<!-- CSS -->
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">

	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/ico/kingadmin-favicon144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/ico/kingadmin-favicon114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/ico/kingadmin-favicon72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo base_url();?>assets/ico/kingadmin-favicon57x57.png">

	<!-- javascript -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery/jquery-2.1.0.min.js"></script>
</head>

<body class="dashboard">
	<!-- WRAPPER -->
	<div class="wrapper">
		<!-- TOP BAR -->
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<!-- logo -->
					<div class="col-md-2 logo" style="margin-top:-7px; margin-bottom:5px;">
						<a href="#"><b style="color:#F2F2F2;font-size:16px;"><img src="<?php echo base_url();?>assets/img/logo-gs-t.png"></b></a>
					</div>
					<!-- end logo -->
					<div class="col-md-10">
						<div class="row">
							<div class="col-md-3">
							</div>
							<div class="col-md-9">
								<div class="top-bar-right">
									<!-- responsive menu bar icon -->
									<a href="#" class="hidden-md hidden-lg main-nav-toggle"><i class="fa fa-bars"></i></a>
									<!-- end responsive menu bar icon -->

									<!-- <button type="button" id="global-volume" class="btn btn-link btn-global-volume"><i class="fa"></i></button>  -->
									<div class="logged-user">
										<div class="btn-group">
											<a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
												<img src="<?php echo base_url();?>assets/img/user-avatar.png" alt="User Avatar"/>
												<span class="name">นายทดสอบ ใจดีมาก</span> <span class="caret"></span>
											</a>
											<ul class="dropdown-menu" role="menu">
												<li>
													<a href="<?php echo base_url();?>index.php/teacher/profile/">
														<i class="fa fa-user"></i>
														<span class="text"> Profile </span>
													</a>
												</li>
												<li>
													<a href="<?php echo base_url();?>index.php/authen/">
														<i class="fa fa-power-off"></i>
														<span class="text"> Logout </span>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<!-- end logged user and the menu -->
								</div>
								<!-- /top-bar-right -->
							</div>
						</div>
						<!-- /row -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /top -->
		<!-- BOTTOM: LEFT NAV AND RIGHT MAIN CONTENT -->
		<div class="bottom">
			<div class="container">
				<div class="row">
					<!-- left sidebar -->
					<div class="col-md-2 left-sidebar">
						<!-- main-nav -->
						<nav class="main-nav">
							<ul class="main-menu">
								<li <?php echo $menuactive=='1' ? 'class="active"':'' ;?> >
									<a href="<?php echo base_url();?>index.php/teacher/informationTeacher" >
										<i class="fa fa-home fa-fw"></i><span class="text">HOME</span></a>
									</li>
									<li <?php echo $menuactive=='2' ? 'class="active"':'' ;?>>
										<a href="<?php echo base_url();?>index.php/teacher/loadWork/" >
											<i class="fa fa-th-list fa-fw"></i><span class="text">ภาระงาน</span></a>
										</li>
										<li <?php echo $menuactive=='3' ? 'class="active"':'' ;?>>
											<a href="<?php echo base_url();?>index.php/teacher/searchStudent/" >
												<i class="fa fa-th-list fa-fw"></i><span class="text">ค้นหานักศึกษา</span></a>
											</li>
											<li <?php echo $menuactive=='4' ? 'class="active"':'' ;?>>
												<a href="<?php echo base_url();?>index.php/teacher/searchPaper/" >
													<i class="fa fa-th-list fa-fw"></i><span class="text">ค้นหาภาคนิพนธ์</span></a>
												</li>
												<li <?php echo $menuactive=='5' ? 'class="active"':'' ;?>>
													<a href="<?php echo base_url();?>index.php/teacher/searchJournal/" >
													<i class="fa fa-th-list fa-fw"></i><span class="text">ค้นหางานวิจัย</span></a>
												</li>
												<li <?php echo $menuactive=='6' ? 'class="active"':'' ;?>>
													<a href="<?php echo base_url();?>index.php/teacher/authen/" >
													<i class="fa fa-th-list fa-fw"></i><span class="text">Authen</span></a>
												</li>
												<!-- <li><p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p></li> -->
											</ul>
										</nav>
										<!-- /main-nav -->
										<!-- <i class="fa fa-angle-left js-toggle-minified"></i>  -->

									</div>
									<!-- end left sidebar -->
									<!-- content-wrapper -->
									<div class="col-md-10 content-wrapper" >
										<div class="row" >
											<div class="col-md-12">
												<ul class="breadcrumb">
													<li><i class="fa fa-home"></i><a href="#">Home</a></li>
													<li class="active"><?php echo $namepage; ?></li>
												</ul>
											</div>
											<div class="col-md-12" style="margin-top:-30px;"><hr></div>

										</div>
										<!-- main -->
										<div class="content">