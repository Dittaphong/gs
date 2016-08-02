<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authen extends CI_Controller {

	public function index()
	{
		//$this->load->view('login');
		$this->studentLogin();
	}

	public function studentLogin()
	{
		$this->data['title']='ระบบสารสนเทศนักศึกษา';
		$this->load->view('/student/Login',$this->data);
	}
}
