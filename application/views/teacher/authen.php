<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบสารสนเทศอาจารย์</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  </head>
  <body align='center'>
  	<div class="col-sm-12" style="padding-top:10%;">
	  	<div class="col-sm-4">
	  	</div>
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel-heading" style="text-align:left;">ระบบสารสนเทศอาจารย์</div>
				<div class="panel-body">
					<div class="col-sm-12">
						<form class="form-horizontal" action="<?php echo base_url();?>index.php/teacher/informationTeacher/">
							<div class="form-group">
								<label for="userName" class="col-sm-4 control-label">ชื่อเข้าใช้</label>
								<div class="col-sm-8">
									<input type="email" class="form-control col-sm-12" id="userName" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-sm-4 control-label">รหัสผ่าน</label>
								<div class="col-sm-8">
									<input type="password" class="form-control col-sm-12" id="password" placeholder="Password">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<button type="submit" class="btn btn-default pull-right">เข้าสู่ระบบ</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
	  	</div>
	</div>
	<!-- Javascript -->
	<script src="<?php echo base_url();?>assets/js/jquery/jquery-2.1.0.min.js"></script>
	</body>
	</html>