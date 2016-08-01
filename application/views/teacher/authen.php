<?php $this->load->view('teacher/header'); ?>
<div class="col-sm-10">
	<div class="panel panel-success">
		<div class="panel-heading">Authen Professer</div>
		<div class="panel-body">
			<div class="col-sm-4 info-icons" >
				<p class="text-right">ระบบสารสนเทศอาจารย์</p>
				<span><i class="fa fa-file-image-o fa-5x pull-right" aria-hidden="true"></i></span>
			</div>
			<div class="col-sm-7">
				<form class="form-horizontal">
					<div class="form-group">
						<label for="userName" class="col-sm-3 control-label">บันชีผู้ใช้งาน</label>
						<div class="col-sm-5">
							<input type="email" class="form-control" id="userName" placeholder="Email">
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-3 control-label">รหัสเข้าใช้งาน</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" id="password" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-6">
							<button type="submit" class="btn btn-default pull-right">Buttom</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('teacher/footer');?>