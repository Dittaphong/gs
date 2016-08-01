<?php $this->load->view('teacher/header'); ?>
<div class="col-sm-10">
	<div class="panel panel-success">
		<div class="panel-heading">index teacher</div>
		<div class="panel-body">
			<div class="col-sm-12">
				<?php echo anchor('teacher/authen', 'teacherAuthen','class="btn btn-primary col-sm-4"'); ?> 
				
				<?php echo anchor('teacher/informationTeacher', 'สารสนเทศอาจารย์','class="btn btn-primary col-sm-4"'); ?>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('teacher/footer');?>