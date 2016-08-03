<?php $this->load->view('teacher/header'); ?>

<div class="row">
	<div class="col-sm-12">    <!-- div body pull- right -->
		<div class="col-sm-12 well">
			<div class="col-sm-12"><small class="lead"> :: ค้นหานักศึกษา ::</small></div>
			<form class="form-horizontal " role="form">
				<div class="col-sm-12">
					<div class="form-group">
						<div class="col-sm-2">
							<label class="control-label pull-right " for="email">รหัส :</label>
						</div>
						<div class="col-sm-4">
							<input type="email" class="form-control " id="email" placeholder="Enter email">
						</div>
						<div class="col-sm-2">
							<label class="control-label pull-right "  for="email">ชื่อ - สกุล :</label>
						</div>
						<div class="col-sm-4">
							<input type="email" class="form-control" id="email" placeholder="Enter email">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2">
							<label class="control-label pull-right "  for="email">แผนการศึกษา/สาขา :</label>
						</div>
						<div class="col-sm-4">
							<input type="email" class="form-control" id="email" placeholder="Enter email">
						</div>
						<div class="col-sm-2">
							<label class="control-label pull-right "  for="email">คณะ :</label>
						</div>
						<div class="col-sm-4">
							<input type="email" class="form-control" id="email" placeholder="Enter email">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-2">
							<label class="control-label pull-right "  for="email">สถานะ :</label>
						</div>
						<div class="col-sm-4">
							<input type="email" class="form-control" id="email" placeholder="Enter email">
						</div>
						<div class="col-sm-4 pull-right"><button type="submit" class="btn btn-primary col-sm-5">ค้นหา</button></div>
					</div>
				</div>
			</form>
		</div>
		<!-- <div class="col-sm-12 "> -->
		<div class="col-sm-12 ">
			<table class="table table-hover">
				<thead >
					<tr >
						<th>รหัส</th>
						<th>ชื่อ-นามสกุล</th>
						<th>คณะ</th>
						<th>สาขาวิชา/แผนการศึกษา</th>
						<th>ระดับการศึกษา</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>408650-0</td>
						<td>นาย xxxxxx xxxxxxx</td>
						<td>คณะเทคโนโลยี</td>
						<td>เทคโนโลยีการศึกษา แผน ก แบบ ก</td>
						<td>ปริญาโท ภาคปกติ</td>
					</tr>
					<tr>
						<td>408650-0</td>
						<td>นาย xxxxxx xxxxxxx</td>
						<td>คณะเทคโนโลยี</td>
						<td>เทคโนโลยีการศึกษา แผน ก แบบ ก</td>
						<td>ปริญาโท ภาคปกติ</td>
					</tr>
					<tr>
						<td>408650-0</td>
						<td>นาย xxxxxx xxxxxxx</td>
						<td>คณะเทคโนโลยี</td>
						<td>เทคโนโลยีการศึกษา แผน ก แบบ ก</td>
						<td>ปริญาโท ภาคปกติ</td>
					</tr>
					<tr>
						<td>408650-0</td>
						<td>นาย xxxxxx xxxxxxx</td>
						<td>คณะเทคโนโลยี</td>
						<td>เทคโนโลยีการศึกษา แผน ก แบบ ก</td>
						<td>ปริญาโท ภาคปกติ</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- </div> -->
	</div>
</div>

<?php $this->load->view('teacher/footer'); ?>