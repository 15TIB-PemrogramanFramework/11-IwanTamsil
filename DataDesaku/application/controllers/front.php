<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'kk' => $this->model->GetKk('order by id_kk desc')->result_array(),
			'ktp' => $this->model->GetKtp('order by id_ktp desc')->result_array(),
		);
		$this->load->view('front/alldata', $data);
	}
}

/* End of file  */
/* Location: ./application/controllers/ */