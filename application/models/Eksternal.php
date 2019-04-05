<?php 

class Eksternal extends CI_Model{	
	
	function tambah_barang($nama_barang,$asal_barang,$tgl_masuk,$tgl_pengembalian,$jumlah,$status,$kategori,$gambar){		
		return $this->db->query("INSERT INTO `barang_eksternal`(`id_barang`, `nama_barang`, `asal_barang`, `tgl_masuk`, `tgl_pengembalian`, `jumlah`, `status`, `kategori`, `gambar`) VALUES ('','$nama_barang','$asal_barang','$tgl_masuk','$tgl_pengembalian','$jumlah','belum dikembalikan','$kategori','a')");
	}

	function tampil_barang(){
		return $this->db->get('barang_eksternal')->result();
	}

	function detail_barang_eksternal($id_barang){
		$this->db->where('id_barang',$id_barang);
		$query=$this->db->get('barang_eksternal');
		return $query->result();
	}		
}