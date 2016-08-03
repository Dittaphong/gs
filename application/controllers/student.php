<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function index()
	{
		$this->data['menuactive']='1';
		$this->data['namepage']='Dashboard';
		$this->load->view('/student/Dashboard',$this->data);
	} 

	public function dashboard(){
		$this->data['menuactive']='1';
		$this->data['namepage']='Dashboard';
		$this->load->view('/student/Dashboard',$this->data);
	}

	public function profile(){
		$this->data['menuactive']='1';
		$this->data['namepage']='Profile'; 
		$this->load->view('/student/Profile',$this->data);
	}

	public function ceqe(){
		$this->data['menuactive']='2';
		$this->data['namepage']='ขอสอบ CE/QE'; 
		$this->load->view('/student/Ceqe',$this->data);
	}

	public function termpaper(){
		$this->data['menuactive']='3';
		$this->data['namepage']='ยื่นหัวข้อภาคนิพนธ์'; 
		$this->load->view('/student/Termpaper',$this->data);
	}

	public function adviser(){
		$this->data['menuactive']='3';
		$this->data['namepage']='ขอแต่งตั้งอาจารย์ที่ปรึกษา'; 
		$this->load->view('/student/Adviser',$this->data);
	}

	public function termpaperconfirm(){
		$this->data['menuactive']='3';
		$this->data['namepage']='ยื่นหัวข้อภาคนิพนธ์'; 
		$this->load->view('/student/Termpaperconfirm',$this->data);
	}

	public function exams(){
		$this->data['menuactive']='4';
		$this->data['namepage']='ขอสอบภาคนิพนธ์'; 
		$this->load->view('/student/Exams',$this->data);
	}
	
	public function research(){
		$this->data['menuactive']='6';
		$this->data['namepage']='ค้นหางานวิจัย'; 
		$this->load->view('/student/Research',$this->data);
	}
	public function searchdisst(){
		$this->data['menuactive']='5';
		$this->data['namepage']='ค้นหาภาคนิพนธ์'; 
		$this->load->view('/student/Searchdisst',$this->data);
	}
	
}?>
