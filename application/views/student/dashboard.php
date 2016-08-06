<?php $this->load->view('/student/Header'); ?>
	<div class="row" >  
		<div class="col-md-2 col-sm-4" style="text-align:center;"> 
			<p style="padding: 10px;">
				<img alt="" width="100%"  src="<?php echo base_url().'assets/img/profile-studen.png';?>" data-holder-rendered="true" style=" display: block;">
			</p>
		</div> 
		<div class="col-md-5 col-sm-12" >
			<table border="0" width="100%">
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;">รหัส :</p></td>
					<td align="left"><p style="padding: 5px;">59123435678</p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;">ชื่อ-สกุล (ภาษาไทย) :</p></td>
					<td align="left"><p style="padding: 5px;">นายสมชาย ใจดีมาก</p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;">แผนการเรียน :</p></td>
					<td align="left"><p style="padding: 5px;">ภาคปกติ</p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;">สถานะภาพ :</p></td>
					<td align="left"><p style="padding: 5px;">กำลังศึกษา</p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;">วันเข้าศึกษา :</p></td>
					<td align="left"><p style="padding: 5px;">16/07/2559</p></td>
				</tr>
			</table>
		</div> 
		<div class="col-md-5 col-sm-12" >
			<table  border="0" width="100%">
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;">ระดับการศึกษา :</p></td>
					<td align="left">
						<p style="padding: 5px;">
							<?php  echo $this->session->userdata('username')=='ms_user' ? 'ปริญญาโท' : 'ปริญญาเอก' ;?> 
						</p>
					</td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;">ชื่อๅสกุล (ภาษาอังกฤษ) :</p></td>
					<td align="left"><p style="padding: 5px;">Somchai Jaidemark</p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;">คณะ :</p></td>
					<td align="left"><p style="padding: 5px;">ศึกษาศาสตร์</p></td>
				</tr>
				<tr>
					<td align="right" width="50%"><p style="padding: 5px;">ภาษาต่างประเทศ :</p></td>
					<td align="left"><p style="padding: 5px;">ผ่าน</p></td>
				</tr>
			</table>
		</div>
		<div class="col-md-12 col-sm-12" style="text-align:center;margin-top:3%">
			<div class="col-md-2 col-sm-4">
				<div class="sidebar-minified " style="margin-left:-19%;margin-right:-19%;"><i >1</i></div>
				<span>เข้าศึกษา</span>
			</div>
			<div class="col-md-2 col-sm-4">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;"><i >2</i></div>
				<span>ขอสอบประมวลความรู้</span>
			</div>
			<div class="col-md-2 col-sm-4">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;"><i style="background:#088A08;">3</i></div>
				<span>ยื่นหัวข้อภาคนิพนธ์</span>
			</div>
			<div class="col-md-2 col-sm-4">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;"><i >4</i></div>
				<span>สอบเค้าโครง</span>
			</div>
			<div class="col-md-2 col-sm-4">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;"><i >5</i></div>
				<span>สอบวิทยานิพนธ์</span>
			</div>
			<div class="col-md-2 col-sm-4">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;"><i >6</i></div>
				<span>จบการศึกษา</span>
			</div>
		</div>
	</div>
	<div class="row" style="text-align:left;margin-top:5%">
		
		<div class="col-md-6 col-sm-12 " >
			<div class="panel panel-default" style="height:450px;padding:5px;"> 
				<div class="panel-heading" ><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp;ภาคนิพนธ์</div>
				<table  border="0" width="100%">
					<tr>
						<td align="right" width="30%"><p style="padding: 5px;">ชื่อภาคนิพนธ์ (TH) :</p></td>
						<td align="left">
							<p style="padding: 5px;text-align:right;">
								<button type="button" class="btn btn-danger ">ส่งหัวข้อภาคนิพนธ์</button>
							</p>
						</td>
					</tr>
					<tr>
						<td align="right" width="30%"><p>ชื่อภาคนิพนธ์ (EN) :</p></td>
						<td align="left"><p>  </p></td>
					</tr>
					<tr>
						<td align="right" width="30%"><p style="padding: 5px;">รายละเอียด :</p></td>
						<td align="left"><p style="padding: 5px;"> </p></td>
					</tr>
					<tr>
						<td align="right" width="30%"><p style="padding: 5px;">ผลงานวิจัย :</p></td>
						<td align="left"><p style="padding: 5px;"> </p></td>
					</tr>
					<tr>
						<td align="right" width="30%"><p style="padding: 5px;"><br></p></td>
						<td align="left"><p style="padding: 5px;"> </p></td>
					</tr>
					<tr>
						<td align="right" width="30%"><p style="padding: 5px;">วันส่งเล่มสมบูรณ์ :</p></td>
						<td align="left"><p style="padding: 5px;"> </p></td>
					</tr>
					<tr>
						<td align="right" width="30%"><p style="padding: 5px;">สถานะการส่งเล่ม :</p></td>
						<td align="left"><p style="padding: 5px;"> </p></td>
					</tr>
					<tr>
						<td align="right" width="30%"><p style="padding: 5px;">อาจารย์ที่ปรึกษาหลัก :</p></td>
						<td align="left">
							<p style="padding: 5px;text-align:right;">
								<button type="button" class="btn btn-danger">ขอแต่งตั้งอาจารย์ที่ปรึกษาหลัก</button>
							</p>
						</td>
					</tr>
					<tr>
						<td align="right" width="30%"><p style="padding: 5px;">อาจารย์ที่ปรึกษาร่วม :</p></td>
						<td align="left">
							<p style="padding: 5px;text-align:right;">
								<button type="button" class="btn btn-danger">ขอแต่งตั้งอาจารย์ที่ปรึกษาร่วม</button>
							</p>
						</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="col-md-6 col-sm-12 " >
			<div class="panel panel-default" style="height:450px;padding:5px;"> 
				<div class="panel-heading" ><i class="glyphicon glyphicon-tags"></i>&nbsp;&nbsp;ข่าวสารข้อมูล </div>
				<br>
				<b><a href="#">ประกาศผล ส่งหัวข้อภาคนิพนธ์</a></b><br>
				<b><a href="#">ประกาศ ตารางสอบหัวข้อภาคนิพนธ์</a></b><br>
				<b><a href="#">ประกาศมหาวิทยาลัย</a></b><br>
			</div>
		</div> 
	</div>
<?php $this->load->view('/student/Footer'); ?>   