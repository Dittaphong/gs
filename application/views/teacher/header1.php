<!DOCTYPE html>
<html>
<head>
	<title>TEACHER</title>
	<link rel='stylesheet' media='all' type='text/css' href='<?php echo base_url();?>assets/css/bootstrap.css' />
	<link rel='stylesheet' media='all' type='text/css' href='<?php echo base_url();?>assets/css/font-awesome.min.css' />
	<!-- <script src='<?php echo base_url();?>assest/js/bootstrap/bootstrap.js' type='text/javascript'></script> -->
</head>
<body>
	<div class="container">
		<div class="row">
		<br>
		<div class="col-sm-12">
			<div class="col-sm-2  pull-left"> <!-- menu left -->
				<div class="panel panel-success">
					<div class="panel-heading">เมนู</div>
					<div class="panel-body">
						<div ><?php echo anchor('teacher/index','หน้าหลัก','class="btn btn-primary col-sm-12"');?></div>	<br><br>
						<div ><?php echo anchor('teacher/loadWork','ภาระงาน','class="btn btn-primary col-sm-12"');?></div>	<br><br>
						<div ><?php echo anchor('teacher/searchStudent','ค้นหานักศึกษา','class="btn btn-primary col-sm-12"');?></div>	<br><br>
						<div ><?php echo anchor('teacher/searchPaper','ค้นหาภาคนิพนธ์','class="btn btn-primary col-sm-12"');?></div>	<br><br>
						<div ><?php echo anchor('#','ค้นหางานวิจัย','class="btn btn-primary col-sm-12"');?></div>
					</div>
				</div>
			</div>
