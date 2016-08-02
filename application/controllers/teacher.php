<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Teacher extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['title'] = "ระบบสารสนเทศอาจารย์";
		$this->load->view('teacher/index',$data);
	}
	public function authen()
	{
		$data['title'] = "ระบบสารสนเทศอาจารย์";
		$this->load->view('teacher/authen',$data);
	}
	public function informationTeacher()
	{
		$data['title'] = "ระบบสารสนเทศอาจารย์";
		$this->load->view('teacher/informationTeacher',$data);
	}
	public function searchStudent()
	{
		$data['title'] = "ระบบสารสนเทศอาจารย์";
		$this->load->view('teacher/searchStudent',$data);
	}
	public function searchPaper()
	{
		$data['title'] = "ระบบสารสนเทศอาจารย์";
		$this->load->view('teacher/searchPaper',$data);
	}
	public function loadWork()
	{
		$data['title'] = "ระบบสารสนเทศอาจารย์";
		$this->load->view('teacher/loadWork',$data);
	}
	public function test()
	{
		$data['title'] = "ระบบสารสนเทศอาจารย์";
		$this->load->view('teacher/test',$data);
	}
}
/* End of file teacher.php */
/* Location: ./application/controllers/teacher.php */