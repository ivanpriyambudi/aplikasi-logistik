<?php 

class Peminjaman extends CI_Model{	
	
	function tambah_keranjang($nama_peminjam,$nim_peminjam,$nama_keranjang,$tgl_pembuatan,$status){		
		return $this->db->query("INSERT INTO `keranjang_peminjaman`(`id_keranjang`, `nama_peminjam`, `nim_peminjam`, `nama_keranjang`, `tgl_pembuatan`, `status`) VALUES ('','$nama_peminjam','$nim_peminjam','keranjang-$nama_peminjam-$nim_peminjam',CURDATE(),'belum')");
	}

	function tampil_keranjang(){
		return $this->db->query("SELECT `id_keranjang`, `nama_keranjang`, `tgl_pembuatan`, `status` FROM `keranjang_peminjaman` WHERE status='belum'")->result();
	}

	function tampil_keranjang_data(){
		return $this->db->get('keranjang_peminjaman')->result();
	}

	function get_nama_keranjang($id_keranjang){
		return $this->db->query("SELECT * FROM `keranjang_peminjaman` WHERE `id_keranjang`='$id_keranjang'")->result();
	}

	function insert_into($id_keranjang, $nama_keranjang, $nambar) {
        return $this->db->query("INSERT INTO `peminjaman_barang`(`id_keranjang`, `nama_keranjang`, `nama_barang`) VALUES ('$id_keranjang', '$nama_keranjang', '$nambar')");
	}

	function get_barang_by_name($name){
		return $this->db->query("SELECT * FROM `peminjaman_barang` WHERE `nama_keranjang`='$name'")->result();
	}

	function edit_jumlah($name, $jumlah){
		$this->db->query("UPDATE `peminjaman_barang` SET `jumlah_barang` = '$jumlah' WHERE `nama_barang`='$name'");
	}

}