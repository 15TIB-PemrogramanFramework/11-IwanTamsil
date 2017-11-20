 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {	

	public function __construct()
	{
		parent::__construct();
		
	}
	function cek_login_warga($table, $data_login){
		return $this->db->get_where($table, $data_login);
	}
}