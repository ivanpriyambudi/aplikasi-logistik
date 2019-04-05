<?php

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();		
		$this->load->model('Admin_login');
		$this->load->model('Inventaris');
		$this->load->model('Eksternal');
		$this->load->helper('url');

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

	/*-----------------------------------------<LINK>-------------------------------------------------*/

	function inventaris_admin(){
		$data['tampilbarang'] = $this->Inventaris->tampil_barang();

		$this->load->view('inventaris_admin',$data);
	}

	function inventaris_detail_admin(){
		$id_barang=$this->uri->segment('3');
		$nam=str_replace('-', '', strtolower($id_barang));
		$data['detailbarangadmin']=$this->Inventaris->detail_barang_user($nam);
		$data['tampil']=$this->Inventaris->detail_barang_user($nam);

		$this->load->view('inventaris-detail_admin',$data);
	}

	function barang_eksternal_admin(){
		$data['tampilbarang_eks'] = $this->Eksternal->tampil_barang();

		$this->load->view('barang-eksternal_admin',$data);
	}

	function barang_eksternal_detail_admin(){
		$id_barang=$this->uri->segment('3');
		$nam=str_replace('-', '', strtolower($id_barang));
		$data['detailbarangeksternal']=$this->Eksternal->detail_barang_eksternal($nam);
		$data['tampil']=$this->Eksternal->detail_barang_eksternal($nam);

		$this->load->view('eksternal-detail_admin',$data);
	}

	function pengadaan_admin(){
		$this->load->view('pengadaan_admin');
	}

	function pengadaan_barang_data_admin(){
		$this->load->view('pengadaan-barang-data_admin');
	}

	function request_admin(){
		$this->load->view('request_admin');
	}

function pemberitahuan(){
		$this->load->view('pemberitahuan_user');
	}
	

	/*---------------------------------------</LINK>---------------------------------------------------*/

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

	function tambah_barang_eksternal(){
		$nama_barang=$this->input->post('nama_barang');
		$asal_barang=$this->input->post('asal_barang');
		$tgl_masuk=$this->input->post('tgl_masuk');
		$tgl_pengembalian=$this->input->post('tgl_pengembalian');
		$jumlah=$this->input->post('jumlah');
		$status=$this->input->post('status');
		$kategori=$this->input->post('kategori');
		$gambar=$this->input->post('gambar');
		
		$this->Eksternal->tambah_barang($nama_barang,$asal_barang,$tgl_masuk,$tgl_pengembalian,$jumlah,$status,$kategori,$gambar);
		redirect(base_url('admin/barang_eksternal_admin'));
	}

	function update_barang(){
		$nama_barang=$this->input->post('nama_barang');
		$kategori=$this->input->post('kategori');
		$jumlah=$this->input->post('jumlah');
		$deskripsi=$this->input->post('deskripsi');
		$gambar=$this->input->post('gambar');
		$status=$this->input->post('status');
		$id_barang = $this->input->post('id_barang');

		$this->Inventaris->update_barang($nama_barang,$kategori,$jumlah,$deskripsi,$gambar,$status,$id_barang);
		redirect(base_url('admin'));
	}

	function delete_barang(){
		$id_barang = $this->input->post('id_barang');

		$this->Inventaris->hapus_barang($id_barang);
		redirect(base_url('admin/inventaris_admin'));
	}

}
