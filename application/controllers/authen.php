<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authen extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$now = new DateTime(null, new DateTimeZone('Asia/Bangkok'));
	}
	public function index()
	{
		//$this->load->view('login');
		if($this->session->userdata('username')=='teacher'){
			redirect('/teacher/');
		}else if($this->session->userdata('username')=='ms_user' OR $this->session->userdata('username')=='pd_user'){
			redirect('/student/');
		}else{
			$this->studentLogin();
		}

	}

	public function studentLogin()
	{
		$this->load->library('session');
		$this->data['title']='ระบบสารสนเทศนักศึกษา';

		if($_POST){
			// ตรวจสอบข้อมูล Login
	     	if($_POST['username']=='ms_user' AND $_POST['password']=='ms_user' ){ // Student
	     		$now = new DateTime(null, new DateTimeZone('Asia/Bangkok'));
	     		$this->data['username']=$_POST['username'];
	     		$this->loginSession = array(
	     			"username"    => $_POST['username'],
	     			"lastLogin"   => $now->format('d/m/Y H:i')
	     			);
	     		$this->session->set_userdata($this->loginSession);

				//echo $this->session->userdata('username');
	     		redirect('/student/');
			}else if($_POST['username']=='pd_user' AND $_POST['password']=='pd_user' ){ // Student
				$now = new DateTime(null, new DateTimeZone('Asia/Bangkok'));
				$this->data['username']=$_POST['username'];
				$this->loginSession = array(
					"username"    => $_POST['username'],
					"lastLogin"   => $now->format('d/m/Y H:i')
					);
				$this->session->set_userdata($this->loginSession);

				//echo $this->session->userdata('username');
				redirect('/student/');

			}else{
	     		// หากมี Session Login อยู่แล้ว ให้ไปหน้าหลักของ student
				if($this->session->userdata('username')=='ms_user' OR $this->session->userdata('username')=='pd_user'){
					redirect('index.php/student/');
				}else{
					$this->data['username'] =$_POST['username'];
					$this->data['password'] =$_POST['password'];
					$this->data['error_txt']="ชื่อเข้าใช้ หรือรหัสผ่านไม่ถูกต้อง";
					$this->load->view('/student/Login',$this->data);
				}
			}

		}else{
			// หากมี Session Login อยู่แล้ว ให้ไปหน้าหลักของ student
			if($this->session->userdata('username')=='ms_user' OR $this->session->userdata('username')=='pd_user'){
				redirect('index.php/student/');
			}else{
				$this->data['username'] ='';
				$this->data['password'] ='';
				$this->data['error_txt']='';
				$this->load->view('/student/Login',$this->data);
			}
		}
	}

	public function logout(){
		if ( $this->session->userdata("username") != null )
		{
			$this->session->unset_userdata("username");
			$this->session->unset_userdata("lastLogin");

			redirect('/authen/studentLogin/');
		}
	}
}
