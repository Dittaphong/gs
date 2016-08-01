<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Teacher extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('teacher/index');
	}
	public function authen()
	{
		$this->load->view('teacher/authen');
	}
	public function informationTeacher()
	{
		$this->load->view('teacher/informationTeacher');
	}
	public function searchStudent()
	{
		$this->load->view('teacher/searchStudent');
	}
	public function searchPaper()
	{
		$this->load->view('teacher/searchPaper');
	}
	public function loadWork()
	{
		$this->load->view('teacher/loadWork');
	}
}
/* End of file teacher.php */
/* Location: ./application/controllers/teacher.php */