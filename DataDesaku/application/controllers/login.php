<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	function index(){
		$this->load->view('admin/loginadmin');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$dataLogin = array(
			'username' => $username,
			'password' => $password
		);
		$cek = $this->m_login->cek_login_warga("admin", $dataLogin)->num_rows();
		if($cek > 0 ){
			$data_session = array(
				'username' => $username,
				'status' => "login"
			);
			
			$this->session->set_userdata($data_session);
			Redirect(base_url().'admin');
		}else{
			Redirect(base_url(). 'login') ;
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('loginuser'));
	}
}