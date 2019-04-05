<?php 
 
class Admin_login extends CI_Model{	
	
	function cek_login($username,$password){		
		return $this->db->query("SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password' LIMIT 1");
	}	
}