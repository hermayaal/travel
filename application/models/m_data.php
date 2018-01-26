<?php 

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}

	function input_data($data,$user){
		$this->db->insert($user,$data);
	}
	function hapus_data($where,$user){
	$this->db->where($where);
	$this->db->delete($user);
	}
	function edit_data($where,$user){		
		return $this->db->get_where($user,$where);
	}

	function update_data($where,$data,$user){
		$this->db->where($where);
		$this->db->update($user,$data);
	}	
}