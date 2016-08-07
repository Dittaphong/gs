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
		<div class="col-md-12 col-sm-12" style="text-align:center;margin-top:2%"> 
			<div class="col-md-1"></div>
			<div class="col-md-3 col-sm-4">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;"><i style="background:#088A08;">1</i></div>
				<span>สอบเค๊าโครง</span>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;"><i >2</i></div>
				<span>สอบวิทยานิพนธ์</span>
			</div>
			<div class="col-md-3 col-sm-4">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;"><i >3</i></div>
				<span>เสร็จสิ้น</span>
			</div>  
			<div class="col-md-1"></div>
		</div>
	</div> -->
	<div class="row" style="text-align:left;margin-top:0%"> 
		<div class="col-md-12 col-sm-12" style="text-align:center;margin-top:3%"> 
			<div class="col-md-1"></div>
			<div class="col-md-3 col-sm-4">
				<div class="sidebar-minified active" style="margin-left:-19%;margin-right:-19%;">
					<a href="<?php echo base_url();?>index.php/student/exams/1/" >
					<?php if($param1==1){ ?>
						<i style="background:#088A08;color:#ffffff;">1</i>
					<?php }else{ ?>
						<i>1</i>
					<?php } ?>
					</a>
				</div>
				<span>สอบเค๊าโครง</span>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;">
					<a href="<?php echo base_url();?>index.php/student/exams/2/" >
					<?php if($param1==2){ ?>
						<i style="background:#088A08;color:#ffffff;">2</i>
					<?php }else{ ?>
						<i>2</i>
					<?php } ?>
					</a>
				</div>
				<span>สอบวิทยานิพนธ์</span>
			</div>
			<div class="col-md-3 col-sm-4">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;">
					<a href="<?php echo base_url();?>index.php/student/exams/3/" >
					<?php if($param1==3){ ?>
						<i style="background:#088A08;color:#ffffff;">3</i>
					<?php }else{ ?>
						<i>3</i>
					<?php } ?>
					</a>
				</div> 
				<span>เสร็จสิ้น</span>
			</div>  
			<div class="col-md-1"></div>
		</div>
	</div>
	<?php if($param1==1){ ?>

	<div class="row" style="text-align:left;margin-top:3%"> 
		<div class="col-md-12 col-sm-12 " >
			<div class="panel panel-default" style="height:220px;padding:5px;"> 
				<div class="panel-heading" ><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp; ขอสอบ</div>
				<br>   
				<div class="col-sm-1">&nbsp;</div>
				<div class="col-sm-4" style="margin-top:10px;">
					<b>สอบเค้าโครง</b> <br><br>
					 <b style="padding-left:20px;">สอบครั้งที่ 1 02/07/2558 </b> &nbsp;&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-thumbs-down" style="color:#8A0808;"></i> <b style="color:#8A0808;"> ไม่ผ่านการสอบ </b> <br>
					 <b style="padding-left:20px;">สอบครั้งที่ 2 05/08/2558 </b> &nbsp;&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-bullhorn" style="color:#DBA901;"></i> <b style="color:#DBA901;"> รอผลการสอบ </b> <br><br>
					 <button type="submit" style="margin-left:20px;" class="btn btn-primary btn-xs"> ขอสอบเค้าโครง </button>
				</div>   
				<div class="col-sm-1" style="border-right: 1px solid #ff0000;height:140px;"></div>
				<div class="col-sm-4" style="margin-top:10px;">
					<b>สอบวิทยานิพนธ์</b> <br><br> 
				</div>   
				<div class="col-sm-1">&nbsp;</div>
				<!-- <div class="col-sm-12" style="text-align:center;"><br>
					<button type="submit" class="btn btn-primary btn-sm"> สอบเค๊าโครง </button>
					<br>
				</div>  -->
			</div>
		</div> 
	</div>
	<?php }else if($param1==2){ ?>
	<div class="row" style="text-align:left;margin-top:3%"> 
		<div class="col-md-12 col-sm-12 " >
			<div class="panel panel-default" style="height:220px;padding:5px;"> 
				<div class="panel-heading" ><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp; ขอสอบ</div>
				<br>   
				<div class="col-sm-1">&nbsp;</div>
				<div class="col-sm-4" style="margin-top:10px;">
					<b>สอบเค้าโครง</b> <br><br>
					<b style="padding-left:20px;">สอบครั้งที่ 1 02/07/2558 </b> &nbsp;&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-thumbs-down" style="color:#8A0808;"></i> <b style="color:#8A0808;"> ไม่ผ่านการสอบ </b> <br>
					<b style="padding-left:20px;">สอบครั้งที่ 2 05/08/2558 </b> &nbsp;&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-thumbs-up" style="color:#088A08;"></i> <b style="color:#088A08;"> ผ่านการสอบ </b> <br><br>
					  <!-- <button type="submit" style="margin-left:20px;" class="btn btn-primary btn-xs"> ขอสอบเค้าโครง </button> -->
				</div>   
				<div class="col-sm-1" style="border-right: 1px solid #ff0000;height:140px;"></div>
				<div class="col-sm-4" style="margin-top:10px;">
					<b>สอบวิทยานิพนธ์</b> <br><br> 
					<b style="padding-left:20px;">สอบครั้งที่ 1 02/09/2558 </b> &nbsp;&nbsp;&nbsp;&nbsp;
					<button type="submit" class="btn btn-primary btn-xs"> 
						<i class="glyphicon glyphicon-print" style="color:#ffffff;"></i> 
						<b style="color:#ffffff;"> Print </b> 
					</button>
					<br>
				</div>   
				<div class="col-sm-1">&nbsp;</div>
				<!-- <div class="col-sm-12" style="text-align:center;"><br>
					<button type="submit" class="btn btn-primary btn-sm"> สอบเค๊าโครง </button>
					<br>
				</div>  -->
			</div>
		</div> 
	</div>
	<?php }else if($param1==3){ ?>
	<div class="row" style="text-align:left;margin-top:3%"> 
		<div class="col-md-12 col-sm-12 " >
			<div class="panel panel-default" style="height:220px;padding:5px;"> 
				<div class="panel-heading" ><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp; ขอสอบ</div>
				<br>   
				<div class="col-sm-1">&nbsp;</div>
				<div class="col-sm-4" style="margin-top:10px;">
					<b>สอบเค้าโครง</b> <br><br>
					<b style="padding-left:20px;">สอบครั้งที่ 1 02/07/2558 </b> &nbsp;&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-thumbs-down" style="color:#8A0808;"></i> <b style="color:#8A0808;"> ไม่ผ่านการสอบ </b> <br>
					<b style="padding-left:20px;">สอบครั้งที่ 2 05/08/2558 </b> &nbsp;&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-thumbs-up" style="color:#088A08;"></i> <b style="color:#088A08;"> ผ่านการสอบ </b> <br><br>
					  <!-- <button type="submit" style="margin-left:20px;" class="btn btn-primary btn-xs"> ขอสอบเค้าโครง </button> -->
				</div>   
				<div class="col-sm-1" style="border-right: 1px solid #ff0000;height:140px;"></div>
				<div class="col-sm-4" style="margin-top:10px;">
					<b>สอบวิทยานิพนธ์</b> <br><br> 
					<b style="padding-left:20px;">สอบครั้งที่ 1 02/09/2558 </b> &nbsp;&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-thumbs-up" style="color:#088A08;"></i> <b style="color:#088A08;"> ผ่านการสอบ </b> <br><br> 
				</div>   
				<div class="col-sm-1">&nbsp;</div>
				<!-- <div class="col-sm-12" style="text-align:center;"><br>
					<button type="submit" class="btn btn-primary btn-sm"> สอบเค๊าโครง </button>
					<br>
				</div>  -->
			</div>
		</div> 
	</div>
	<?php } ?>
<?php $this->load->view('/student/Footer'); ?> 