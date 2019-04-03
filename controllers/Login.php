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

	function peminjaman_barang(){
		$this->load->view('peminjaman-barang_user');
   }

   function peminjaman_data(){
	   $this->load->view('peminjaman-data_user');
   }

   function pemberitahuan(){
	   $this->load->view('pemberitahuan_user');
   }


}
