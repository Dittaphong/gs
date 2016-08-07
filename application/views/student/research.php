<?php $this->load->view('/student/Header'); ?>
	<div class="row" style="text-align:left;margin-top:1%"> 
		<div class="col-md-12 col-sm-12 " >
			<div class="panel panel-default" style="height:<?php echo $param1 == '3' ? '410px;' : '280px;' ; ?>padding:5px;"> 
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
				<?php if($param1=='3'){ ?>  
					<div class="col-sm-12" style="margin-top:10px;">
						<label for="address" class="col-md-3 control-label" style="text-align:right;padding-top:8px;">ชื่องานวิจัย (ภาษาไทย)</label>
						<div class="col-sm-8">
							<input type="text" class="form-control col-md-12" style="height:30px;" name="name_th" value="" required  placeholder="ระบุรหัสนักศึกษา...">
						</div>
					</div> 
					<div class="col-sm-12" style="margin-top:10px;">
						<label for="address" class="col-md-3 control-label" style="text-align:right;padding-top:8px;">ชื่องานวิจัย (ภาษาอังกฤษ)</label>
						<div class="col-sm-8">
							<input type="text" class="form-control col-md-12" style="height:30px;" name="name_th" value="" required  placeholder="ระบุชื่องานวิจัย...">
						</div>
					</div>
					<div class="col-sm-12" style="margin-top:10px;">
						<label for="address" class="col-md-3 control-label" style="text-align:right;padding-top:8px;">วันที่ส่ง </label>
						<div class="col-sm-8"> 
							<div class="form-group">
				                <div class='input-group date' id='datetimepicker1'>
				                    <input type='text' class="form-control" />
				                    <span class="input-group-addon">
				                        <span class="glyphicon glyphicon-calendar"></span>
				                    </span>
				                </div>
				            </div>
						</div>
					</div> 
					<div class="col-sm-12" style="margin-top:0px;">
						<label for="address" class="col-md-3 control-label" style="text-align:right;padding-top:8px;"></label>
						<div class="col-sm-8">
							<a href="<?php echo base_url();?>index.php/student/research/1/" >
								<button class="btn btn-success  btn-xs">+ ยืนยันการบันทึกข้อมูล</button> 
							</a>
						</div>
					</div>
				<?php }  ?> 
				<?php if($param1=='1' or $param1=='2'){ ?>  
				<div class="col-md-12" style="text-align:right;margin-top:0px;">
					<a href="<?php echo base_url();?>index.php/student/research/3/" >
						<button class="btn btn-success  btn-sm">+ เพิ่มงานวิจัย</button> 
					</a>
				</div> 
				<?php }  ?> 
			</div>
		</div> 
	</div>

			

	<div class="row" style="text-align:left;margin-top:1%"> 
		<div class="col-md-12 col-sm-12 " >
			<div class="panel panel-default" style="height:<?php echo $param1 == '2' ? '790px;' : '390px;' ; ?>padding:5px;"> 
				<div class="panel-heading" ><i class="glyphicon glyphicon-search"></i>&nbsp;&nbsp; ค้นหาผลงานวิจัย</div>  
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
				<a href="<?php echo base_url();?>index.php/student/research/2/" >
					<button class="btn btn-success "><i class="glyphicon glyphicon-search"></i> ค้นหาผลงานวิจัย </button> 
				</a>
			</div> 
			<?php if($param1=='2'){ ?>
			<div class="col-md-12" style="text-align:left;margin-top:40px;">
				<div  style="overflow-x:scroll;overflow-y: hidden; ">
	          		<table class="table table-striped" style="table-layout: fixed;word-wrap: break-word;width:1500px;">
					<!-- <table class="table table-bordered"> -->  
					    <thead>
					      <tr>
					        <th width="40">No.</th>
					        <th width="300">ชื่องานวิจัย</th>
					        <th>ประเภท</th>
					        <th>สถานะภาพ</th>
					        <th>รหัสนักศึกษา</th>
					        <th>ชื่อ-สกุล</th>
					        <th>คณะ</th>
					        <th>สาขา/แผนการศึกษา</th>
					        <th>ระดับการศึกษา</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td>1</td>
					        <td>การพัฒนางานประชาสัมพันธ์ขององค์การบริหารส่วนจังหวัดฉะเชิงเทรา</td>
					        <td>งานวิจัยท้องถิ่น</td>
					        <td>-</td>
					        <td>5841300123678</td>
					        <td>นายสมชาย ใจดีมาก</td>
					        <td>คณะครุศาสตร์</td>
					        <td>คอมพิวเตอร์ศึกษา</td>
					        <td>ปริญญาโท</td>
					      </tr>
					      <tr>
					        <td>2</td>
					        <td>การศึกษาความเป็นไปได้ของโครงการลงทุนในธุรกิจบริการซักอบรีด เขตบางนา </td>
					        <td>งานวิจัยท้องถิ่น</td>
					        <td>-</td>
					        <td>5841300123678</td>
					        <td>นายสมชาย ใจดีมาก</td>
					        <td>คณะครุศาสตร์</td>
					        <td>คอมพิวเตอร์ศึกษา</td>
					        <td>ปริญญาโท</td>
					      </tr>
					      <tr>
					        <td>3</td>
					        <td>การวางกลยุทธ์ทางการตลาดธุรกิจเส้อผ้าสำเร้จรูปใน อ.เมือง จังหวัดเชียงใหม่ ของบริษัท มัลติ ครีเอชั่น สกรีน จำกัด</td>
					        <td>งานวิจัยท้องถิ่น</td>
					        <td>-</td>
					        <td>5841300123678</td>
					        <td>นายสมชาย ใจดีมาก</td>
					        <td>คณะครุศาสตร์</td>
					        <td>คอมพิวเตอร์ศึกษา</td>
					        <td>ปริญญาโท</td>
					      </tr>
					    </tbody>
					</table>
				</div><br>
				<div class="col-md-6" >
					แสดงรายการที่ 1 ถึง 3 จากทั้งหมด 3 รายการ 
				</div>
				<div class="col-md-6" style="text-align:right;"> 
					<button type="submit" class="btn btn-primary btn-xs"> หน้าแรก </button>
					<button type="submit" class="btn btn-primary btn-xs"> 1 </button>
					<button type="submit" class="btn btn-primary btn-xs"> 2 </button>
					<button type="submit" class="btn btn-primary btn-xs"> 3 </button>
					<button type="submit" class="btn btn-primary btn-xs"> หน้าสุดท้าย </button> 
				</div>
			</div>
			<?php } ?>
		</div> 
	</div>
<?php $this->load->view('/student/Footer'); ?> 