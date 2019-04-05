<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->model('User_login');
		$this->load->model('Inventaris');
		$this->load->model('Peminjaman','',TRUE);
	}

	function index()
	{
		$this->load->view('login_user');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->User_login->cek_login($username,$password)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			redirect(base_url("dasboard"));

		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

//--------------------------------<TAMPIL>---------------------------------------//

	function peminjaman_barang_user(){
		$data['tampilbarang'] = $this->Inventaris->tampil_barang();
		$data['tampilkeranjang'] = $this->Peminjaman->tampil_keranjang();

		$this->load->view('peminjaman-barang_user',$data);
	}

	function peminjaman_data_user(){
		$data['tampilkeranjangdata'] = $this->Peminjaman->tampil_keranjang_data();

		$this->load->view('peminjaman-data_user',$data);
	}

	

//-----------------------------------</TAMPIL>-------------------------------------//

	function tambah_keranjang_peminjaman(){
		$nama_peminjam=$this->input->post('nama_peminjam');
		$nim_peminjam=$this->input->post('nim_peminjam');
		$nama_keranjang=$this->input->post('nama_keranjang');
		$tgl_pembuatan=$this->input->post('tgl_pembuatan');
		$status=$this->input->post('status');
		
		$this->Peminjaman->tambah_keranjang($nama_peminjam,$nim_peminjam,$nama_keranjang,$tgl_pembuatan,$status);
		redirect(base_url('login/peminjaman_barang_user'));
	}

	function tambah($id_keranjang, $id_barang) {
		$this->load->database();
		$this->load->model('Peminjaman','',TRUE);
		$this->load->model('Inventaris');
		//$idx = $this->Peminjaman->get_id_keranjang($id);

		//$data = $this->Peminjaman->get_nama_keranjang($id_keranjang);

		$data2 = $this->Peminjaman->get_nama_keranjang($id_keranjang);
		$bar = $this->Inventaris->detail_barang_user($id_barang);

		foreach ($bar as $b) {
			$nambar = $b->nama_barang;
		}
		foreach ($data2 as $k) {
			$nama = $k->nama_keranjang;
		}

		$this->Peminjaman->insert_into($id_keranjang, $nama, $nambar);

		redirect(base_url('login/peminjaman_barang_user'));
	}

	function detail_barang_user($id){
		$id_barang=$this->uri->segment('3');
		$nam=str_replace('-', '', strtolower($id_barang));
		$data['tampilkeranjang'] = $this->Peminjaman->tampil_keranjang();
		$data['detailbaranguser']=$this->Inventaris->detail_barang_user($id);
		$data['tampil']=$this->Inventaris->detail_barang_user($nam);

		$this->load->view('detail-barang_user',$data);
	}

	function detail_peminjaman($id, $name){
		$data['ss']=$this->Peminjaman->tampil_keranjang_data();
		$data['detailuser']=$this->Peminjaman->get_nama_keranjang($id);
		$data['barang']=$this->Peminjaman->get_barang_by_name($name);

		$this->load->view('detail-peminjaman_user',$data);
	}

	function detail_peminjaman2($id, $name){
		$data['ss']=$this->Peminjaman->tampil_keranjang_data();
		$data['detailuser']=$this->Peminjaman->get_nama_keranjang($id);
		$data['barang']=$this->Peminjaman->get_barang_by_name($name);

		$this->load->view('detail-peminjaman2_user',$data);
	}

	function edit_jumlah_barang(){

		$nama=$this->input->post('nambar');
		$jumlah=$this->input->post('quantity');
		$id_keranjang=$this->input->post('id_keranjang');
		$tgl_dibutuhkan=$this->input->post('tgl_dibutuhkan');


		$this->Peminjaman->edit_tanggal($tgl_dibutuhkan,$id_keranjang);
		$this->Peminjaman->update($id_keranjang);
		$q = $this->Peminjaman->edit_jumlah($nama, $jumlah);

		redirect(base_url('login/peminjaman_barang_user'));

	}

	function hapus_peminjaman(){
		$id_keranjang=$this->input->post('id_keranjang');

		$this->Peminjaman->hapus_keranjang($id_keranjang);
		redirect(base_url('login/peminjaman_data_user'));
	}

	// function update(){
	// 	$id_keranjang=$this->input('id_keranjang');
	// 	$this->Peminjaman->update($id_keranjang);
	// }

}
