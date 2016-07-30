<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('stu_dashboard');
	}
}
