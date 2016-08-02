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

	public function ceqe(){
		$this->data['namepage']='ขอสอบ CE/QE'; 
		$this->load->view('student/ceqe',$this->data);
	}

	public function termpaper(){
		$this->data['namepage']='ส่งหัวข้อภาคนิพนธ์'; 
		$this->load->view('student/termpaper',$this->data);
	}

	public function adviser(){
		$this->data['namepage']='ขอแต่งตั้งอาจารย์ที่ปรึกษา'; 
		$this->load->view('student/adviser',$this->data);
	}

	public function termpaperconfirm(){
		$this->data['namepage']='ยื่นหัวข้อภาคนิพนธ์'; 
		$this->load->view('student/termpaperconfirm',$this->data);
	}
	
	
}?>
