<?php $this->load->view('/student/Header'); ?>
	<div class="row" style="text-align:left;margin-top:0%"> 
		<div class="col-md-12 col-sm-12" style="text-align:center;margin-top:3%"> 
			<div class="col-md-1"></div>
			<div class="col-md-3 col-sm-4">
				<div class="sidebar-minified active" style="margin-left:-19%;margin-right:-19%;">
					<a href="<?php echo base_url();?>index.php/student/ceqe/1/" >
					<?php if($param1==1){ ?>
						<i style="background:#088A08;color:#ffffff;">1</i>
					<?php }else{ ?>
						<i>1</i>
					<?php } ?>
					</a>
				</div>
				<span><?php echo $namepage?> </span>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="sidebar-minified" style="margin-left:-19%;margin-right:-19%;">
					<a href="<?php echo base_url();?>index.php/student/ceqe/2/" >
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
					<a href="<?php echo base_url();?>index.php/student/ceqe/3/" >
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
		<div class="row request" style="text-align:left;margin-top:5%">
			<div class="col-md-12 col-sm-12 " >
				<div class="panel panel-default" style="height:250px;padding:5px;"> 
					<div class="panel-heading" ><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp; <?php echo $namepage?> </div>
					<br>   
					<div class="col-sm-12" style="margin-top:10px;">
						 <b>สอบครั้งที่ 1 02/08/2558 </b> &nbsp;&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-thumbs-down" style="color:#8A0808;"></i> <b style="color:#8A0808;"> ไม่ผ่านการสอบ </b> <br>
					</div>   
					<div class="col-sm-12" style="text-align:center;"><br><br>
						<a href="<?php echo base_url();?>index.php/student/ceqe/2/" >
						<button type="submit" class="btn btn-primary btn-sm"> <?php echo $namepage?> </button>
						</a>
						<br>
					</div> 
				</div>
			</div>  
		</div> 
	<?php }else if($param1==2){ ?>
		<div class="row preview" style="text-align:left;margin-top:5%">
			<div class="col-md-12 col-sm-12 " >
				<div class="panel panel-default" style="height:1700px;padding:5px;"> 
					<div class="panel-heading" ><i class="glyphicon glyphicon-book"></i>&nbsp;&nbsp; <?php echo $namepage?>  </div>
					<br>   
					<div class="col-md-12 col-sm-12 " > 
					<?php if($this->session->userdata('username')=='ms_user'){
						$fm = base_url().'assets/img/form2.jpg';
					}else{
						$fm = base_url().'assets/img/form1.jpg';
					}?>
						<img src="<?php echo $fm;?>" style="width:100%;">
					
					</div>
				</div>
			</div>
		</div>  
	<?php }else if($param1==3){ ?>
	<?php } ?>
<?php $this->load->view('/student/Footer'); ?>   









