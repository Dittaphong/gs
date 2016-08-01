<?php $this->load->view('teacher/header'); ?>

<div class="col-sm-10 pull-right">    <!-- div body pull- right -->
	<div class="col-sm-12 well">
		<div class="col-sm-12"><small class="lead"> :: ค้นหาภาคนิพล ::</small></div>
		<form class="form-horizontal " role="form">
			<div class="col-sm-12">
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">ชื่อภาคนิพนธ์ :</label>
					<div class="col-sm-4">
						<input type="email" class="form-control" id="email" placeholder="Enter email">
					</div>
					<label class="control-label col-sm-2" for="email">ชื่อ - สกุล :</label>
					<div class="col-sm-4">
						<input type="email" class="form-control" id="email" placeholder="Enter email">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">แผนการศึกษา/สาขา :</label>
					<div class="col-sm-4">
						<input type="email" class="form-control" id="email" placeholder="Enter email">
					</div>
					<label class="control-label col-sm-2" for="email">คณะ :</label>
					<div class="col-sm-4">
						<input type="email" class="form-control" id="email" placeholder="Enter email">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">ระดับการศึกษา :</label>
					<div class="col-sm-4">
						<input type="email" class="form-control" id="email" placeholder="Enter email">
					</div>
					<label class="control-label col-sm-2">ประเภท :</label>
					<div class="col-sm-4">
						<input type="email" class="form-control" id="email" placeholder="Enter email">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12"><button type="submit" class="btn btn-primary col-sm-2 pull-right">ค้นหา</button></div>
				</div>
			</div>
		</form>
	</div>
	<!-- <div class="col-sm-12 "> -->
	<div class="col-sm-12 ">
		<table class="table table-hover">
		<thead class="small">
				<tr >
					<th>ชื่อ</th>
					<th>ประเภท</th>
					<th>สถานะ</th>
					<th>รหัสนักศึกษา</th>
					<th>ชื่อ-นามสกุล</th>
					<th>คณะ</th>
					<th>สาขา/แผนกการศึกษา</th>
					<th>ระดับการศึกษา</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>การทำระบบงานของมหาวิทยาลัยราชภัฎมหาสารคาม</td>
					<td>วพ.</td>
					<td>D</td>
					<td>565020054-1</td>
					<td>นาย สมชาย ใจดีมาก</td>
					<td>คณะวิทยาศาสตร์</td>
					<td>เคมี แผน ก แบบ ก</td>
					<td>ปริญญาโท</td>
				</tr>
				<tr>
					<td>การทำระบบงานของมหาวิทยาลัยราชภัฎมหาสารคาม</td>
					<td>วพ.</td>
					<td>D</td>
					<td>565020054-1</td>
					<td>นาย สมชาย ใจดีมาก</td>
					<td>คณะวิทยาศาสตร์</td>
					<td>เคมี แผน ก แบบ ก</td>
					<td>ปริญญาโท</td>
				</tr>
				<tr>
					<td>การทำระบบงานของมหาวิทยาลัยราชภัฎมหาสารคาม</td>
					<td>วพ.</td>
					<td>D</td>
					<td>565020054-1</td>
					<td>นาย สมชาย ใจดีมาก</td>
					<td>คณะวิทยาศาสตร์</td>
					<td>เคมี แผน ก แบบ ก</td>
					<td>ปริญญาโท</td>
				</tr>
			</tbody>
		</table>
	</div>
	<!-- </div> -->
</div>
<?php $this->load->view('teacher/footer'); ?>