<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();		
		$this->load->model('Admin_login');
		$this->load->model('Inventaris');
 
	}

	function index()
	{
		$this->load->view('login_admin');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->Admin_login->cek_login($username,$password)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("dasboard_admin"));
 
		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}


	
	function inventaris_detail(){
		 $this->load->view('inventaris-detail_admin');
	}
	

	function barang_eksternal_admin(){
		 $this->load->view('barang-eksternal_admin');
	}
	function eksternal_semua(){
		 $this->load->view('eksternal-semua_admin');
	}
	function eksternal_detail(){
		 $this->load->view('eksternal-detail_admin');
	}

	function pengadaan_admin(){
		 $this->load->view('pengadaan_admin');
	}

	function pengadaan_barang_data_admin(){
		 $this->load->view('pengadaan-barang-data_admin');
		 function inventaris_semua(){
		 $this->load->view('inventaris-semua_admin');
	}
	}
	function inventaris_admin(){
		 $this->load->view('inventaris_admin');
	}

	function request_admin(){
		 $this->load->view('request_admin');
	}

	function request_detail(){
		$this->load->view('request-detail_admin');
	}

	function tambah_barang(){
		 $nama_barang=$this->input->post('nama_barang');
		 $kategori=$this->input->post('kategori');
		 $jumlah=$this->input->post('jumlah');
		 $deskripsi=$this->input->post('deskripsi');
		 $gambar=$this->input->post('gambar');
		 $status=$this->input->post('status');

		 $this->Inventaris->tambah_barang($nama_barang,$kategori,$jumlah,$deskripsi,$gambar,$status);
		 redirect(base_url('admin/inventaris_admin'));
	}

}
