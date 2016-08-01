<?php $this->load->view('teacher/header'); ?>

<div class="col-sm-10 pull-right">    <!-- div body pull- right -->
	<div class="col-sm-12 well">
		<div class="col-sm-12"><small class="lead"> :: ค้นหานักศึกษา ::</small></div>
		<form class="form-horizontal " role="form">
			<div class="col-sm-12">
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">รหัส :</label>
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
					<label class="control-label col-sm-2" for="email">สถานะ :</label>
					<div class="col-sm-4">
						<input type="email" class="form-control" id="email" placeholder="Enter email">
					</div>
					<div class="col-sm-4 pull-right"><button type="submit" class="btn btn-primary">ค้นหา</button></div>
					<!-- <div class="col-sm-4">
						<input type="email" class="form-control" id="email" placeholder="Enter email">
					</div> -->
				</div>
			</div>
		</form>
	</div>
	<!-- <div class="col-sm-12 "> -->
	<div class="col-sm-12 ">
		<table class="table">
			<caption>table title and/or explanatory text</caption>
			<thead>
				<tr>
					<th>header</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>data</td>
				</tr>
			</tbody>
		</table>
	</div>
	<!-- </div> -->
</div>
<?php $this->load->view('teacher/footer'); ?>