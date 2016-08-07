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
	</div> -->

	<div class="row" style="text-align:left;margin-top:0%"> 
		<div class="col-md-12 col-sm-12 " >
			<div class="panel panel-default" style="height:390px;padding:5px;"> 
				<div class="panel-heading" ><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp; ค้นหาผลงานวิจัย</div>  
			<br>  
			<div class="col-sm-12" style="margin-top:10px;">
				<label for="address" class="col-md-3 control-label" style="text-align:right;padding-top:8px;">รหัสนักศึกษา </label>
				<div class="col-sm-8">
					<input type="text" class="form-control col-md-12" style="height:30px;" name="name_th" value="" required  placeholder="ระบุรหัสนักศึกษา...">
				</div>
			</div> 
			<div class="col-sm-12" style="margin-top:10px;">
				<label for="address" class="col-md-3 control-label" style="text-align:right;padding-top:8px;">ชื่องานวิจัย </label>
				<div class="col-sm-8">
					<input type="text" class="form-control col-md-12" style="height:30px;" name="name_th" value="" required  placeholder="ระบุชื่องานวิจัย...">
				</div>
			</div>
			<div class="col-sm-12" style="margin-top:10px;">
				<label for="address" class="col-md-3 control-label" style="text-align:right;padding-top:8px;">คณะ </label>
				<div class="col-sm-8"> 
					<select class="form-control col-md-12">
					  <option value="all">ทั้งหมด</option> 
					  <option value="1">คณะครุศาสตร์</option> 
					  <option value="1">คณะวิทยาศาสตร์</option> 
					</select>
				</div>
			</div>
			<div class="col-sm-12" style="margin-top:10px;">
				<label for="address" class="col-md-3 control-label" style="text-align:right;padding-top:8px;">สาขา/แผนการศึกษา </label>
				<div class="col-sm-8">
					<select class="form-control col-md-12">
					  <option value="all">ทั้งหมด</option>  
					</select>
				</div>
			</div>
			<div class="col-sm-12" style="margin-top:10px;">
				<label for="address" class="col-md-3 control-label" style="text-align:right;padding-top:8px;">ระดับการศึกษา </label>
				<div class="col-sm-8">
					<select class="form-control col-md-12">
					  <option value="all">ทั้งหมด</option>  
					</select>
				</div>
			</div>
			<div class="col-sm-12" style="margin-top:10px;">
				<label for="address" class="col-md-3 control-label" style="text-align:right;padding-top:8px;">ประเภท </label>
				<div class="col-sm-8">
					<select class="form-control col-md-12">
					  <option value="all">ทั้งหมด</option>  
					</select>
				</div>
			</div>
			 

			<div class="col-md-12" style="text-align:center;margin-top:20px;">
				<button class="btn btn-success "><i class="glyphicon glyphicon-search"></i> ค้นหาผลงานวิจัย </button> 
			</div>
			</div>
		</div>
	</div>


	<div class="row" style="text-align:left;margin-top:1%"> 
		<div class="col-md-12 col-sm-12 " >
			<div class="panel panel-default" style="height:280px;padding:5px;"> 
				<div class="panel-heading" ><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp; ผลงานวิจัย</div>
				<table class="tb_list"  width="100%" cellpadding="10">
					<thead>
						<tr>
							<th width="40" height="40" class="tb_th"> no. </th>
							<th class="tb_th">หัวข้องานวิจัย</th>
							<th width="15%" class="tb_th">วันที่ส่ง</th>
							<th width="10%" class="tb_th">สถานะ</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="tb_td">1</td>
							<td class="tb_td">
								การพัฒนางานประชาสัมพันธ์ขององค์การบริหารส่วนจังหวัดฉะเชิงเทรา <br> 
								DEVELOPMENT OF PUBLIC RALATIONS ORGANIZATION ADMINISTRATION CHACHOENGSAO</td>
							<td class="tb_td">12 มีนาคม 2558</td>
							<td class="tb_td">เผยแพร่งานวิจัย</td>
						</tr>
						<tr>
							<td class="tb_td">2</td>
							<td class="tb_td">
								การศึกษาความเป็นไปได้ของโครงการลงทุนในธุรกิจบริการซักอบรีด เขตบางนา <br>
								THE FEASIBLITY STUDY ON INVESTMENT OF THE LAUNDRY SERVICE BUSINESS AT BANG NA
							</td>
							<td class="tb_td">8 ตุลาคม 2558</td>
							<td class="tb_td">เผยแพร่งานวิจัย</td>
						</tr>
						<tr>
							<td class="tb_td">3</td>
							<td class="tb_td">
								การวางกลยุทธ์ทางการตลาดธุรกิจเส้อผ้าสำเร้จรูปใน อ.เมือง จังหวัดเชียงใหม่ ของบริษัท มัลติ ครีเอชั่น สกรีน จำกัด <br>
								THE STUDY OF STRATEGIC MARKETING PLAN A CASE STUDY OF MULTI CREATION SCREEN CO., LTD
							</td>
							<td class="tb_td">9 มีนาคม 2559</td>
							<td class="tb_td">เผยแพร่งานวิจัย</td>
						</tr>
					</tbody>
				</table> 
				<br>  
				<div class="col-md-12" style="text-align:right;">
					<button class="btn btn-success  btn-sm">+ เพิ่มงานวิจัย</button> 
				</div> 
			</div>
		</div> 
	</div>
<?php $this->load->view('/student/Footer'); ?> 