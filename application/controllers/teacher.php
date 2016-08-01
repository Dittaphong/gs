<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

	}
	public function index()
	{
		$this->load->view('teacher/authen');
	}

	public function informationTeacher()
	{
		$this->load->view('teacher/informationTeacher');
	}

}

/* End of file teacher.php */
/* Location: ./application/controllers/teacher.php */