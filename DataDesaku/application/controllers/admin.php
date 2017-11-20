<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		  
		$this->load->helper(array('form','url'));
		$this ->load-> model('model');
		$this ->load-> model('pesanuser');
	}
	 


	public function index()
	{
		$data['ktp'] = $this -> model -> GetKtp();
		$data['kk'] = $this -> model->GetKk();
		$this->load->view('admin/index');
	}

	public function dataktp()
	{
		$data = array(

			'ktp' => $this->model->GetKtp('order by id_ktp desc')->result_array(),
			);
		$this->load->view('admin/dataktp', $data);
	}

	public function datakk()
	{
		$data = array(
			'kk' => $this->model->GetKk('order by id_kk desc')->result_array(),
		);
		$this->load->view('admin/datakk', $data);
	}

	function inputktp(){
		$this->load->view('admin/inputktp');
	}

	function inputktp_aksi(){
		
		
		$this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/img/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                'gambar' 				=>$gbr['file_name'],
               'nik' 					=> $this->input->post('nik'),
				'nama' 					=> $this->input->post('nama'),
				'alamat' 				=> $this->input->post('alamat'),
				'tgl_ktp' 				=> $this->input->post('tgl_ktp'),
				'keterangan' 			=> $this->input->post('keterangan')
                );
                $this->model->tambah_data($data); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
               $this->session->set_flashdata("sukses", "<div class='alert alert-success'>            
			<strong>Operasi </strong>berhasil di lakukan
		</div>");
                redirect('admin/dataktp'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('admin/inputktp'); //jika gagal maka akan ditampilkan form upload
            }
        }
		$this->model->tambah_data($data);

		redirect(site_url('admin/inputktp'));
	}



	function editktp($kode = 0){
		$row = $this->model->GetKtp("where id_ktp = '$kode'")->result_array();

		$data = array(
			'id_ktp' => $row[0]['id_ktp'],
			'nik' => $row[0]['nik'],
			'nama' => $row[0]['nama'],
			'alamat' => $row[0]['alamat'],
			'tgl_ktp' => $row[0]['tgl_ktp'],
			'keterangan' => $row[0]['keterangan'],
			'gambar' => $row[0]['gambar']
		);

		$this->load->view('admin/editktp', $data);
	}

	function updatektp(){

		$this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/img/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                'gambar' 				=>$gbr['file_name'],
               'nik' 					=> $this->input->post('nik'),
				'nama' 					=> $this->input->post('nama'),
				'alamat' 				=> $this->input->post('alamat'),
				'tgl_ktp' 				=> $this->input->post('tgl_ktp'),
				'keterangan' 			=> $this->input->post('keterangan')
                );
               // $this->model->tambah_data($data); //akses model untuk menyimpan ke database
                $id_ktp = $this->input->post('id_ktp');
                $this->model->UpdateKtp($data,$id_ktp); 

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("sukses", "<div class='alert alert-success'>            
                	<strong>Operasi </strong>berhasil di lakukan
                </div>");
                redirect('admin/dataktp'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
            	$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('admin/inputktp'); //jika gagal maka akan ditampilkan form upload
            }
        }
      
		redirect(site_url('admin/dataktp'));
		
		
	}

	function hapusktp($kode = null){
	 
		
		$result = $this->model->hapusktp('tb_ktp', array('id_ktp'=>$kode),$kode) ;
		$id = $this->input->get('gambar');
		if($result == 1){
			header('location:'.base_url().'admin/dataktp');
		}else{
			header('location:'.base_url().'admin/dataktp/0');
		}
	}

	public function cetakktp()
	{
		header('Content-type: application/vnd.ms-excel');
		header('Content-disposition: attachment; filename="ktp.html"');

		$this->load->view('admin/printktp');
	}

	//batas fungsi ktp dan kk //batas fungsi ktp dan kk //batas fungsi ktp dan kk//batas fungsi ktp dan kk//batas fungsi ktp dan kk//batas fungsi ktp dan kk

	function inputkk(){
		$this->load->view('admin/inputkk');
	}

	function inputkk_aksi(){
		
		
		$this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/img/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                'gambar' 				=>$gbr['file_name'],
               	'nama' 					=> $this->input->post('nama'),
               	'NIK' 					=> $this->input->post('NIK'),
				'alamat' 				=> $this->input->post('alamat'),
				'jenis_kelamin' 				=> $this->input->post('jenis_kelamin'),
				'tgl_kk' 				=> $this->input->post('tgl_kk'),
				'keterangan' 			=> $this->input->post('keterangan')
                );
                $this->model->tambah_datakk($data); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("sukses", "<div class='alert alert-success'>            
			<strong>Operasi </strong>berhasil di lakukan
		</div>");
                redirect('admin/datakk'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('admin/inputkk'); //jika gagal maka akan ditampilkan form upload
            }
        }
		$this->model->tambah_datakk($data);
		redirect(site_url('admin/inputkk'));
	}

	function editkk($kode = 0){
		$row = $this->model->GetKk("where id_kk = '$kode'")->result_array();

		$data = array(
			'id_kk' => $row[0]['id_kk'],
			'NIK' => $row[0]['NIK'],
			'nama' => $row[0]['nama'],
			'alamat' => $row[0]['alamat'],
			'jenis_kelamin' => $row[0]['jenis_kelamin'],
			'tgl_kk' => $row[0]['tgl_kk'],
			'keterangan' => $row[0]['keterangan'],
			'gambar' => $row[0]['gambar']
		);

		$this->load->view('admin/editkk', $data);
	}

	function updatekk(){

	$this->load->library('upload');
        $nmfile = "".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/img/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);
        
        if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                'gambar' 				=>$gbr['file_name'],
                'NIK' 					=> $this->input->post('NIK'),
               	'nama' 					=> $this->input->post('nama'),
               	'jenis_kelamin' 	 	=> $this->input->post('jenis_kelamin'),
				'alamat' 				=> $this->input->post('alamat'),
				'tgl_kk' 				=> $this->input->post('tgl_kk'),
				'keterangan' 			=> $this->input->post('keterangan')
                );
                 $id_kk = $this->input->post('id_kk');
        		$this->model->UpdateKk($data,$id_kk); 

        		 
				  //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("sukses", "<div class='alert alert-success'>            
			<strong>Operasi </strong>berhasil di lakukan
		</div>");
                redirect('admin/datakk'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('admin/inputkk'); //jika gagal maka akan ditampilkan form upload
            }
        }
		redirect(site_url('admin/datakk'));

	}

	
 

     
	function hapuskk($kode = null){
		
		$result = $this->model->hapus('tb_kk', array('id_kk'=>$kode),$kode) ;
		$id = $this->input->get('gambar');
		if($result == 1){
			header('location:'.base_url().'admin/datakk');
		}else{
			header('location:'.base_url().'admin/datakk/0');
		}
	}

	public function cetakkk()
	{
		header('Content-type: application/vnd.ms-excel');
		header('Content-disposition: attachment; filename="kk.html"');

		$this->load->view('admin/printkk');
	}

	// =====================================================================================

	

	

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */