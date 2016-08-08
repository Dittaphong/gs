<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('tcpdf');
		date_default_timezone_set('Asia/Bangkok');
		$now = new DateTime(null, new DateTimeZone('Asia/Bangkok'));
		$this->dateNow = $now->format('d');
		$this->mountNow = "";
		switch ($now->format('m')) {
			case '01':
				$this->mountNow .= "มกราคม";
				break;
			case '02':
				$this->mountNow .="กุมภาพันธ์";
				break;
			case '03':
				$this->mountNow .="มีนาคม";
				break;
			case '04':
				$this->mountNow .="เมษายน";
				break;
			case '05':
				$this->mountNow .="พฤศภาคม";
				break;
			case '06':
				$this->mountNow .="มิถุนายน";
				break;
			case '07':
				$this->mountNow .="กรกฎาคม";
				break;
			case '08':
				$this->mountNow .="สิงหาคม";
				break;
			case '09':
				$this->mountNow .="กันยายน";
				break;
			case '10':
				$this->mountNow .="ตุลาคม";
				break;
			case '11':
				$this->mountNow .="พฤศจิกายน";
				break;
			case '12':
				$this->mountNow .="ธันวาคม";
				break;
			default:
				"เกิดข้อผิดพลาด";
				break;
		}
		$this->yearNow = $now->format('Y')+543;
	}

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

	public function ceqe($param1='1'){
		$this->data['menuactive']='2';
		$this->data['param1']=$param1;  
		$this->data['namepage']= $this->session->userdata('username')=='ms_user' ? 'ขอสอบประมวลผลความรู้' : 'ขอสอบวัดคุณสมบัติ'; 
		$this->load->view('/student/Ceqe',$this->data);
	}

	public function termpaper($param1='1'){
		$this->data['menuactive']='3';
		$this->data['param1']=$param1;
		if($_POST){ 
			$this->data['name_th'] =$_POST['name_th'];
		    $this->data['name_en'] =$_POST['name_en'];
		}else{
			$this->data['name_th'] ="";
		    $this->data['name_en'] ="";
		}
		$this->data['namepage']='ยื่นหัวข้อภาคนิพนธ์'; 
		$this->load->view('/student/Termpaper',$this->data);
	}

	public function adviser($param1='1'){
		$this->data['menuactive']='8';
		$this->data['param1']=$param1;
		$this->data['namepage']='ขอแต่งตั้งอาจารย์ที่ปรึกษา'; 
		$this->load->view('/student/Adviser',$this->data);
	}

	public function termpaperconfirm(){
		$this->data['menuactive']='3';
		$this->data['namepage']='ยื่นหัวข้อภาคนิพนธ์'; 
		$this->load->view('/student/Termpaperconfirm',$this->data);
	}

	public function exams($param1='1'){
		$this->data['menuactive']='4';
		$this->data['param1']=$param1;
		$this->data['namepage']='ขอสอบภาคนิพนธ์'; 
		$this->load->view('/student/Exams',$this->data);
	}
	
	public function research($param1='1'){
		$this->data['menuactive']='6';
		$this->data['param1']=$param1;  
		$this->data['namepage']='ค้นหางานวิจัย'; 
		$this->load->view('/student/Research',$this->data);
	}
	public function searchdisst(){
		$this->data['menuactive']='5';
		$this->data['namepage']='ค้นหาภาคนิพนธ์'; 
		$this->load->view('/student/Searchdisst',$this->data);
	}

	public function completions($param1='1'){
		$this->data['menuactive']='7';
		$this->data['param1']=$param1;  
		$this->data['namepage']='ขอสำเร็จการศึกษา'; 
		$this->load->view('/student/Completions',$this->data);
	}

	public function printPdf()
	{
		$data['dateNow'] = $this->dateNow;
		$data['mountNow'] = $this->mountNow;
		$data['yearNow'] = $this->yearNow;
		$this->load->view('/student/printpdf',$data);
	}
	
}?>
