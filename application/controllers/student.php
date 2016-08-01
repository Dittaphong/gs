<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function index()
	{
		$this->data['title']='ระบบสารสนเทศนักศึกษา';
		$this->load->view('student/stu_dashboard',$this->data);
	} 

	public function dashboard(){
		
	}
	
}?>
