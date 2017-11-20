<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
/**
* 
*/
class profil_warga extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('daftar_login');
	}

	function index(){
		$username = $this->session->userdata('username');
		//Saat nampilkan secara detail pengguna yang sudah login
		$data_warga['data_warga'] = $this->daftar_login->tampilAkun($username);
		//Saat Barang sudah dibeli warga yang sudah login
	 
		$this->load->view('form_user/profil_user', $data_warga);
	}

	 
		
	function editAkun($username){
		$warga=$this->daftar_login->tampilAkun($username);
		$data = array(
			 
			'nama_warga' =>set_value('nama_warga', $warga[0]->nama_warga),
			'password' =>set_value('password', $warga[0]->password),
			'alamat' =>set_value('alamat', $warga[0]->alamat),
			'dusun' => $this->daftar_login->selectdusun(),
			'agama' => $this->daftar_login->selectagama(),
			'action'	=>site_url('profil_warga/edit_aksi'),
			'button'	=>'Perbaharui'
		);
		$this->load->view('form_user/editwarga', $data);
	}
	function edit_aksi(){
		$data=array(
			'nama_warga'		=>$this->input->post('nama_warga'),
			'alamat'		=>$this->input->post('alamat'),
			'password'		=>$this->input->post('password'),
			'alamat'		=>$this->input->post('alamat'),
			'id_dusun'				=>$this->input->post('id_dusun'),
			'id_agama'				=>$this->input->post('id_agama')

		);
		$data_warga = $this->input->post('data_warga');
		$this->daftar_login->editAkunwarga($data_warga, $data); 
		redirect(site_url('profil_warga'));
	}

}
?>