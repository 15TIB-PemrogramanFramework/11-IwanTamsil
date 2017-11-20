<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {

	public function GetKk($where= "") {
		$data = $this->db->query('select * from tb_kk '.$where);
		return $data;
	}

	

	public function GetKtp($where= "") {
		$data = $this->db->query('select * from tb_ktp '.$where);
		return $data;
	}


	public function Simpan($table, $data){
		return $this->db->insert($table, $data);
	}

	public function Update($table,$data,$where){
		return $this->db->update($table,$data,$where);
	}

	public function Hapus($table,$where,$id){
	//$this->db->get_where($table, $where);
		$row=$this->db->query('select gambar from tb_kk where id_kk="'.$id.'"')  ;
				$data=$row->result() ;
				$gambar='';
				foreach($data as $key){
					$gambar=$key->gambar;
				}
				//echo var_dump( $data);exit();
	// echo base_url(). 'assets/img/'.$gambar; exit();
		unlink(FCPATH. 'assets/img/'.$gambar);
	
		$this->db->delete($table,$where);
		return true;     
	}

	public function Hapusktp($table,$where,$id){
	//$this->db->get_where($table, $where);
		$row=$this->db->query('select gambar from tb_ktp where id_ktp="'.$id.'"')  ;
				$data=$row->result() ;
				$gambar='';
				foreach($data as $key){
					$gambar=$key->gambar;
				}
				//echo var_dump( $data);exit();
	// echo base_url(). 'assets/img/'.$gambar; exit();
		unlink(FCPATH. 'assets/img/'.$gambar);
		
	
		$this->db->delete($table,$where);
		return true;     
	}
	function UpdateKtp($data, $id_ktp) {
        $this->db->where('id_ktp', $id_ktp);
        $this->db->update('tb_ktp',$data);
    }

    function UpdateKk($data,$id_kk){

    	   $this->db->where('id_kk',$id_kk);
           $this->db->update('tb_kk',$data);
       
    }

    function cetakktp(){
    	return $this->db->query("select * from tb_ktp");
    }

    function cetakkk(){
    	return $this->db->query("select * from tb_kk");
    }
 


	// Cek No yang sudah ada
	function cekNo($kd){
		$query = $this->db->query("select * from tb_iden where no ='".$kd."'");
		$hasil = 0;
		if ($query->num_rows()>0) {
			$hasil = 1;
		}
		return $hasil;
	}

	public function tambah_data($data){
		//Query INSERT INTO
		$this->db->insert('tb_ktp', $data);
	}

	public function tambah_datakk($data){
		//Query INSERT INTO
		$this->db->insert('tb_kk', $data);
	}


	


}