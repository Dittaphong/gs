<?php $this->load->view('/student/Header'); ?>
	<!-- <div class="row" >  
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
					<td align="left"><p style="padding: 5px;">ปริญญาโท</p></td>
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
			<div class="col-md-1"></div>
			<div class="col-md-3 col-sm-4">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;"><i style="background:#088A08;">1</i></div>
				<span>ส่งหัวข้อภาคนิพนธ์</span>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;"><i style="background:#088A08;">2</i></div>
				<span>ขอแต่งตั้งอาจารย์ที่ปรึกษา</span>
			</div>
			<div class="col-md-3 col-sm-4">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;"><i >3</i></div>
				<span>ยื่นหัวข้อภาคนิพนธ์</span>
			</div>  
			<div class="col-md-1"></div>
		</div>
	</div> -->

	<div class="row" style="text-align:left;margin-top:0%"> 
		<div class="col-md-12 col-sm-12" style="text-align:center;margin-top:3%"> 
			<div class="col-md-1"></div>
			<div class="col-md-3 col-sm-4">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;">
					<a href="<?php echo base_url();?>index.php/student/adviser/1/" >
					<?php if($param1==1){ ?>
						<i style="background:#088A08;color:#ffffff;">1</i>
					<?php }else{ ?>
						<i>1</i>
					<?php } ?>
					</a>
				</div>
				<span>ขอแต่งตั้งอาจารย์ที่ปรึกษาค้นคว้าอิสระ</span>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;">
					<a href="<?php echo base_url();?>index.php/student/adviser/2/" >
					<?php if($param1==2){ ?>
						<i style="background:#088A08;color:#ffffff;">2</i>
					<?php }else{ ?>
						<i>2</i>
					<?php } ?>
					</a>
				</div>
				<span>Preview</span>
			</div>
			<div class="col-md-3 col-sm-4">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;">
					<a href="<?php echo base_url();?>index.php/student/adviser/3/" >
					<?php if($param1==3){ ?>
						<i style="background:#088A08;color:#ffffff;">3</i>
					<?php }else{ ?>
						<i>3</i>
					<?php } ?>
					</a>
				</div> 
				<span>Print</span>
			</div>  
			<div class="col-md-1"></div>
		</div>
	</div>
	<?php if($param1==1){ ?>
		<div class="row" style="text-align:left;margin-top:5%"> 
			<div class="col-md-12 col-sm-12 " >
				<div class="panel panel-default" style="height:340px;padding:5px;"> 
					<div class="panel-heading" ><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp; ขอแต่งตั้งอาจารย์ที่ปรึกษา</div>
					<br>   
					<div class="col-sm-12" style="margin-top:10px;">
						<label for="address" class="col-md-3 control-label" style="text-align:right;padding-top:10px;">อาจารย์ที่ปรึกษาหลัก </label>
						<div class="col-sm-8">
							<input type="text" class="form-control col-md-12" id="address" placeholder="ค้นหา...">
						</div>
					</div>  
					<div class="col-sm-12" style="margin-top:10px;">
						<label for="email" class="col-sm-3 control-label" style="text-align:right;padding-top:10px;">อาจารย์ที่ปรึกษาร่วม </label>
						<div class="col-sm-8">
							<input type="email" class="form-control col-sm-12" id="email" placeholder="ค้นหา...">
							<i class="glyphicon glyphicon-plus-sign" style="font-size:30px;color:#8A0808;"></i>
						</div>
					</div>   
					<div class="col-sm-12" style="text-align:center;"><br>
						<button type="submit" class="btn btn-primary btn-sm">ยื่นขอแต่งตั้งอาจารย์ที่ปรึกษา</button>
						<br>
					</div> 
				</div>
			</div> 
		</div>
	<?php }else if($param1==2){ ?>
		<div class="row preview" style="text-align:left;margin-top:5%">
			<div class="col-md-12 col-sm-12 " >
				<div class="panel panel-default" style="height:1700px;padding:5px;"> 
					<div class="panel-heading" ><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp; ขอแต่งตั้งอาจารย์ที่ปรึกษา </div>
					<br>   
					<div class="col-md-12 col-sm-12 " >  
						<img src="<?php echo base_url();?>assets/img/formadviser.jpg" style="width:100%;">
					
					</div>
				</div>
			</div>
		</div>  
	<?php }else if($param1==3){ ?>
	<?php } ?>
<?php $this->load->view('/student/Footer'); ?>   