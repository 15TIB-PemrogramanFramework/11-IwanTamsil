<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
/**
* 
*/
class loginuser extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('daftar_login');
	}

	function index(){
		$this->load->view('form_user/login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$dataLogin = array(
			'username' => $username,
			'password' => $password
		);
		$cek = $this->daftar_login->cek_login_warga("warga", $dataLogin)->num_rows();
		if($cek > 0 ){
			$data_session = array(
				'username' => $username,
				'status' => "login"
			);
			
			$this->session->set_userdata($data_session);
			redirect(base_url('menuuser'));
		}else{
			redirect(site_url('loginuser'));
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('loginuser'));
	}
}
?>