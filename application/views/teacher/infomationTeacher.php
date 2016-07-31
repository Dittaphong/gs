<?php $this->load->view('teacher/header'); ?>
<div class="col-sm-12">
	<div class="col-sm-2  pull-left"> <!-- menu left -->
		<div class="panel panel-success">
			<div class="panel-heading">เมนู</div>
			<div class="panel-body">
				<div class="btn btn-primary col-sm-12">หน้าหลัก</div>	<br><br>
				<div class="btn btn-primary col-sm-12">ภาระงาน</div>	<br><br>
				<div class="btn btn-primary col-sm-12">ค้นหานักศึกษา</div>	<br><br>
				<div class="btn btn-primary col-sm-12">ค้นหาภาคนิพนธ์</div>	<br><br>
				<div class="btn btn-primary col-sm-12">ค้นหางานวิจัย</div>

			</div>
		</div>
	</div>
	<div class="col-sm-10 pull-right">  <!-- body page right -->
		<div class="col-sm-12 ">
			<form class="form-inline">
				<div class="col-xs-6 col-md-2  pull-left">
					<a href="#" class="thumbnail ">
						<i class="fa fa-user fa-5x " aria-hidden="true"></i>
					</a>
				</div>
				<!--  -->
				<div class="form-group ">
					<label for="userName" class="col-sm-6 control-label">รหัส :</label>
					<div class="col-sm-6">
						<label for="userName" class=" control-label text-left"> 3999991911</label>
					</div>
				</div><br>
				<div class="form-group">
					<label for="userName" class="col-sm-5 control-label">ชื่อ-สกุล(ภาษาไทย) :</label>
					<div class="col-sm-7">
						<label for="userName" class=" control-label"> นาย สมชาย ใจดีมาก</label>
					</div>
				</form>	
			</div>
		</div>
	</div>
	<?php $this->load->view('teacher/footer'); ?>