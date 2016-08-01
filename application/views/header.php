<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<title><?php echo $title; ?></title>
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
	
</head>

<body class="dashboard">
	<!-- WRAPPER -->
	<div class="wrapper">
		<!-- TOP BAR -->
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<!-- logo -->
					<div class="col-md-2 logo" style="margin-top:-5px;">
						<a href="index.html"><b style="color:#F2F2F2;font-size:16px;"><?php echo $title; ?></b></a> 
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
									
									<button type="button" id="global-volume" class="btn btn-link btn-global-volume"><i class="fa"></i></button>
									<!-- <div class="notifications">
										<ul>
											<!-- notification: inbox -->
											<!-- <li class="notification-item inbox">
												<div class="btn-group">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-envelope"></i><span class="count">2</span>
														<span class="circle"></span>
													</a>
													<ul class="dropdown-menu" role="menu">
														<li class="notification-header">
															<em>You have 2 unread messages</em>
												        </li>
													</ul>
												</div>
											</li>

										</ul>  
									</div> -->
						
									<div class="logged-user">
										<div class="btn-group">
											<a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
												<img src="<?php echo base_url();?>assets/img/user-avatar.png" alt="User Avatar"/>
												<span class="name">นายทดสอบ ใจดีมาก</span> <span class="caret"></span>
											</a>
											<ul class="dropdown-menu" role="menu">
												<li>
													<a href="#">
														<i class="fa fa-user"></i>
														<span class="text">Profile</span>
													</a>
												</li> 
												<li>
													<a href="#">
														<i class="fa fa-power-off"></i>
														<span class="text">Logout</span>
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
								<li class="active">
									<a href="#" class="js-sub-menu-toggle"><i class="fa fa-home fa-fw"></i><span class="text">HOME</span></a>
								</li>
								<li >
									<a href="#" class="js-sub-menu-toggle"><i class="fa fa-th-list fa-fw"></i><span class="text">ขอสอบ CE/QE</span></a>
								</li>
								<li >
									<a href="#" class="js-sub-menu-toggle"><i class="fa fa-th-list fa-fw"></i><span class="text">ขอแต่งตั้งอาจารย์ที่ปรึกษา</span></a>
								</li>
								<li >
									<a href="#" class="js-sub-menu-toggle"><i class="fa fa-th-list fa-fw"></i><span class="text">ขอสอบภาคนิพนธ์</span></a>
								</li> 
								<li >
									<a href="#" class="js-sub-menu-toggle"><i class="fa fa-th-list fa-fw"></i><span class="text">ค้นหางานวิจัย</span></a>
								</li> 
								<li >
									<a href="#" class="js-sub-menu-toggle"><i class="fa fa-th-list fa-fw"></i><span class="text">ขอจบ</span></a>
								</li> 
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
									<li class="active">Dashboard</li>
								</ul>
							</div>
							<div class="col-md-12" style="margin-top:-30px;"><hr></div>
						
						</div>
						<!-- main -->
						<div class="content">