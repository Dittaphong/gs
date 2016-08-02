<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function index()
	{
		$this->data['namepage']='Dashboard';
		$this->load->view('student/dashboard',$this->data);
	} 

	public function dashboard(){
		$this->data['namepage']='Dashboard';
		$this->load->view('student/dashboard',$this->data);
	}

	public function profile(){
		$this->data['namepage']='Profile'; 
		$this->load->view('student/profile',$this->data);
	}
	
}?>
