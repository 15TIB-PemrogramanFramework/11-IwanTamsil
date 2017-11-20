<?php 
/**
* 
*/
class daftar_login extends CI_Model
{

	public $order 				= 'DESC';
	public $Ascen				= 'ASCEN';

	 

	
	public $table_dusun	= 'dusun';
	public $id_dusun	= 'id_dusun';
	public $nama_dusun	= 'nama_dusun';

	public $table_agama	= 'agama';
	public $id_agama	= 'id_agama';
	public $nama_agama	= 'nama_agama';

	//Table warga
	public $table_warga 	= 'warga';
	public $nama_warga 	= 'nama_warga';
	public $alamat 	= 'alamat';
	public $username	= 'username';
	public $password 		= 'password';
	 
	
	 

	function __construct()
	{
		parent::__construct();
	}

	function editAkunwarga($username, $datawarga){
		$this->db->where($this->username, $username);
		$this->db->update($this->table_warga, $datawarga);
	}
	function tambahAkun($datawarga){
		$this->db->insert($this->table_warga, $datawarga);
	}

	function selectdusun(){
		$this->db->order_by($this->id_dusun, $this->Ascen);
		return $this->db->get($this->table_dusun)->result();
	}

	function tampildusun($id_dusun){
		$this->db->where($this->id_dusun, $id_dusun);
		return $this->db->get($this->table_dusun)->result();
	}

	function selectagama(){
		$this->db->order_by($this->id_agama, $this->Ascen);
		return $this->db->get($this->table_agama)->result();
	}


	function cek_login_warga($table, $data_login){
		return $this->db->get_where($table, $data_login);
	}
 
	function tampilAkun($username){
		$this->db->distinct();
 		$this->db->select('p.*, k.nama_dusun ,l.nama_agama');
 		$this->db->from('warga p');
 		$this->db->join('dusun k ','k.id_dusun = p.id_dusun','inner');
 		$this->db->join('agama l  ','l.id_agama = p.id_agama');
 		$this->db->where('p.username', $username);
 		return $this->db->get($this->table_warga)->result();
	}

	function tampil_data_warga(){
		$this->db->select('p.*, k.nama_dusun,l.nama_agama');
 		$this->db->from('warga p');
 		$this->db->join('dusun k ','k.id_dusun = p.id_dusun','inner');
 		$this->db->join('agama l  ','l.id_agama = p.id_agama');
 		$this->db->distinct();
 		$hasil=$this->db->get()->result();
                 
                 return $hasil;
	}

	function hapuswarga($username){
			$this->db->where($this->username, $username);
			$this->db->delete($this->table_warga);
	}

}
