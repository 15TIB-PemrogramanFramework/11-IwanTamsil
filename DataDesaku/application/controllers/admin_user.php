<?php 
/**
* 
*/
class admin_user extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('daftar_login');
	}
//Tampilan YAng diTampilkan :
	function index(){
		$data['warga']=$this->daftar_login->tampil_data_warga($hasil);
		$this->load->view('admin/warga_list',$data);
	}

	
//------------------------------HAPUS DATA-------------------------------------------

	function deletewarga($username){
		
		$this->daftar_login->hapuswarga($username);
		redirect(site_url('admin_user'));
	}
//----------------------------------EDIT DATA---------------------------------------
	function editwarga($username){
		$warga=$this->daftar_login->tampilAkun($username);
		$data=array(
			'nama_warga'		=>set_value('nama_warga', $warga[0]->nama_warga),
			'alamat'		=>set_value('alamat', $warga[0]->alamat),
			'username'		=>set_value('username', $warga[0]->username),
			'password'		=>set_value('password', $warga[0]->password),
			'dusun' 					=> $this->daftar_login->selectdusun(),
			'agama' 					=> $this->daftar_login->selectagama(),
			'action'				=>site_url('admin_user/edit_aksi'),
			'button'				=>'Edit'
		);
		$this->load->view('admin/warga_form', $data);
	}
	function edit_aksi(){
		$data=array(
			'nama_warga'	=>$this->input->post('nama_warga'),
			'alamat'	=>$this->input->post('alamat'),
			'password'	=>$this->input->post('password'),
			'id_dusun'			=>$this->input->post('id_dusun'),
			'id_agama'			=>$this->input->post('id_agama')
		);
		$username = $this->input->post('username');
		$this->daftar_login->editAkunwarga($username, $data); 
		redirect(site_url('admin_user'));
	}
//--------------------------------------------------------------------------
}
?>