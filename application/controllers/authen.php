<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authen extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
		redirect('/index.php/studashboard');
	}
}