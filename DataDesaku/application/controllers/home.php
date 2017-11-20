<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->cek_login();
		

	}

	private function cek_login()
	{
		if ($this->session->userdata('admin')) {
			//login sebagai admin
			redirect(base_url().'admin');
		}
		elseif ($this->session->userdata('user')) {
			//login sebagai user
			redirect(base_url().'menuuser');
		}
		else{
			//kembali ke halaman login
			redirect(base_url().'login');
		}
		
	}
}
	




/* End of file  */
/* Location: ./application/controllers/ */