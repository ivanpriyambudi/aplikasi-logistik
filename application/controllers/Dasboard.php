<?php
class Dasboard extends CI_Controller {

        public function index()
        {
                $this->load->view('dasboard_user');
        }
        public function peminjaman_barang_user(){
                $this->load->view('peminjaman-barang_user');
        }
        public function peminjaman_data_user(){
                $this->load->view('peminjaman-data_user');
        }
        public function detail_peminjaman_user(){
                $this->load->view('detail-peminjaman_user');
        }
        public function detail_peminjaman2_user(){
                $this->load->view('detail-peminjaman2_user');
        }
        public function pemberitahuan_user(){
                $this->load->view('pemberitahuan_user');
        }
        function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
        }
        public function detail_barang_user(){
                $this->load->view('detail-barang_user');
        }
}