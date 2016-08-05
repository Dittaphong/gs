<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Teacher extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		// $this->data['menuactive']='1';
		// $this->data['namepage']='HOME';
		$userName = $this->input->post('userName');
		$password = $this->input->post('password');
		if($userName == 'teacher' && $password='teacher'){
			// redirect('teacher/informationTeacher','refresh');
			$this->informationTeacher();
		}else{
			$this->load->view('/teacher/authen');
			// $massage = "ข้อมูล ผิดพลาด ! username & password = 'teacher' ";
			// $url = "/teacher/authen";
			// $this->alert($massage, $url);
			// exit();
			// 	echo "<SCRIPT LANGUAGE='JavaScript'>
			// 	window.alert('$massage')
			// 	window.location.href='".site_url($url)."';
			// </SCRIPT>";
		}
	}
	public function informationTeacher()
	{
		$this->data['menuactive']='1';
		$this->data['namepage']='สารสนเทศอาจารย์';
		$this->load->view('/teacher/informationTeacher',$this->data);
	}
	public function loadWork()
	{
		$this->data['menuactive']='2';
		$this->data['namepage']='ภาระงาน';
		$this->load->view('/teacher/loadWork',$this->data);
	}
	public function searchStudent()
	{
		$this->data['menuactive']='3';
		$this->data['namepage']='ค้นหานักศึกษา';
		$this->load->view('/teacher/searchStudent',$this->data);
	}
	public function searchPaper()
	{
		$this->data['menuactive']='4';
		$this->data['namepage']='ค้นหาภาคนิพนธ์';
		$this->load->view('/teacher/searchPaper',$this->data);
	}
	public function searchJournal()
	{
		$this->data['menuactive']='5';
		$this->data['namepage']='ค้นหางานวิจัย';
		$this->load->view('/teacher/searchJournal',$this->data);
	}
	public function authen()
	{
		$this->data['menuactive']='6';
		$this->data['namepage']='Authen';
		$this->load->view('/teacher/authen',$this->data);
	}
	public function test()
	{
		$this->data['menuactive']='1';
		$this->data['namepage']='Dashboard';
		$this->load->view('/teacher/test',$this->data);
	}
	
	public function alert($massage, $url)
	{
		echo "<meta charset='UTF-8'>
		<SCRIPT LANGUAGE='JavaScript'>
			window.alert('$massage');
			window.location.href='".site_url($url)."';
		</SCRIPT>";
	}
}
/* End of file teacher.php */
/* Location: ./application/controllers/teacher.php */