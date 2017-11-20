<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class menuuser extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper(array('form','url'));
		$this ->load-> model('pesanuser');
	}

public function index() {
		$this -> load -> view('user/home');
	}

	public function daftar() {
		$this -> load -> view('form_user/daftar');
	}

	public function layanan() {
	
		$this -> load ->view('user/ktp_user');

	}

	public function layanankk() {

		 
		$this -> load ->view('user/kk_user');

	}
	public function profil() {

		
		$this -> load ->view('user/profil');
		}

		public function kontak() {

		
		$this -> load ->view('user/aspirasi');
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
			<strong>Data </strong>berhasil di kirim , Trimakasih 
		</div>");
                redirect('menuuser/layanan'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('menuuser/layanan'); //jika gagal maka akan ditampilkan form upload
            }
        }
		$this->model->tambah_data($data);

		redirect(site_url('menuuser/layanan'));
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
                	'NIK' 					=> $this->input->post('NIK'),
                	'nama' 					=> $this->input->post('nama'),
                	'jenis_kelamin' 		=> $this->input->post('jenis_kelamin'),
                	'alamat' 				=> $this->input->post('alamat'),
                	'tgl_kk' 				=> $this->input->post('tgl_kk'),
                	'keterangan' 			=> $this->input->post('keterangan')
                );
                $this->model->tambah_datakk($data); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("sukses", "<div class='alert alert-success'>            
			<strong>Data </strong>berhasil di kirim , Trimakasih 
		</div>");
                redirect('menuuser/layanankk'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
                redirect('menuuser/layanankk'); //jika gagal maka akan ditampilkan form upload
            }
        }
		$this->model->tambah_datakk($data);
		redirect(site_url('menuuser/layanankk'));
	}



	function pesanuser(){
$valid = $this->form_validation;
		$valid->set_rules('name','Name','required');
		$valid->set_rules('email','Email','required');
		$valid->set_rules('subject','Subject','required');
		$valid->set_rules('pesan','pesan','required');


		 
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$pesan = $_POST['pesan'];
		$date = $_POST['date'];

		$data = array(	
			 
			'nama' => $nama,
			'email' => $email,
			'subject' => $subject,
			'pesan' => $pesan,
			'date' => $date
			);

		$this->pesanuser->sendMessage("komentar",$data);
		$this->session->set_flashdata("sukses", "<div class='alert alert-success'>            
			<strong>Pesan </strong>berhasil dikirim , Trimakasih atas masukannya
		</div>");
		redirect('menuuser/kontak');


		
			}


	function hapuspesan($kode = 0){
		$result = $this->pesanuser->Hapus('komentar',array('id_komentar' => $kode));
		if($result == 1){
			header('location:'.base_url().'menuuser/pesan');
		}else{
			header('location:'.base_url().'menuuser/pesan/0');
		}
	}

		public function pesan()
	{
		$data = array(
		'id_komentar' => $this->pesanuser->pesan('order by id_komentar desc')->result_array(),
		);
		$this->load->view('admin/datapesan', $data);
	}
	}	



