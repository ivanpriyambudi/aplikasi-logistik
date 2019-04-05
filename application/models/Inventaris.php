<?php 

class Inventaris extends CI_Model{	
	
	function tambah_barang($nama_barang,$kategori,$jumlah,$deskripsi,$gambar,$status){		
		return $this->db->query("INSERT INTO `barang_inventaris`(`id_barang`, `nama_barang`, `kategori`, `jumlah`, `deskripsi`, `gambar`, `status`) VALUES ('', '$nama_barang', '$kategori', '$jumlah', '$deskripsi', '', 'tersedia')");
	}

	function tampil_barang(){
		return $this->db->get('barang_inventaris')->result();
	}

	function detail_barang_user($id_barang){
		$this->db->where('id_barang',$id_barang);
		$query=$this->db->get('barang_inventaris');
		return $query->result();
	}

	function get_nama_from_nama_barang($nama_barang){
		$this->db->where('nama_barang',$nama_barang);
		$query=$this->db->get('barang_inventaris');
		return $query->result();
	}

	function update_barang($nama_barang,$kategori,$jumlah,$deskripsi,$gambar,$status,$id_barang){
		return $this->db->query("UPDATE `barang_inventaris` SET `nama_barang`='$nama_barang',`kategori`='$kategori',`jumlah`='$jumlah',`deskripsi`='$deskripsi',`gambar`='',`status`='$status' WHERE `id_barang`='$id_barang'");
	}

	function hapus_barang($id_barang){
		return $this->db->query("DELETE FROM `barang_inventaris` WHERE id_barang='$id_barang'");
	}

}