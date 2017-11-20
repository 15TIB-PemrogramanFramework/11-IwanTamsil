<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class tambah_akunuser extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('daftar_login');
	}
	//Tampilan Awal Daftar Akun
	function index(){
		$this->load->view('form_user/daftar');
	}

//--------------------------------------------------
	//tambahAkun
	public function tambah_Akun(){
		$data = array(
			'action' 			=> site_url('tambah_akunuser/tambah_Akun_Aksi'),
			'nama_warga' 	=> set_value('nama_warga'),
			'alamat'	=> set_value('alamat'),
			'username'	=> set_value('username'),
			'password' 	=> set_value('password'),
			 
			'dusun'				=> $this->daftar_login->selectdusun(),
			'agama'				=> $this->daftar_login->selectagama()
		);
		$this->load->view('form_user/daftar', $data);
	}
	function tambah_Akun_Aksi(){
		$data = array(
			'nama_warga' => $this->input->post('nama_warga'),
			'alamat' => $this->input->post('alamat'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'id_agama' => $this->input->post('id_agama'),
			'id_dusun' =>$this->input->post('id_dusun') 
		);
		$this->daftar_login->tambahAkun($data);
		redirect(site_url('loginuser'));
	}
//------------------------------------
}
?>