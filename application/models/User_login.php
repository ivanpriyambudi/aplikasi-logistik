<?php 
 
class User_login extends CI_Model{	
	
	function cek_login($username,$password){		
		return $this->db->query("SELECT * FROM `user` WHERE `username`='$username' AND `password`='$username' LIMIT 1");
	}	
}