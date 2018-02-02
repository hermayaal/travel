<?php 

class M_login extends CI_Model{	
	function cek_login($user,$where){		
		return $this->db->get_where($user,$where);
	}	
}