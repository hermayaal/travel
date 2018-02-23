<?php 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->library('encryption');
 
	}
 
	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_admin',$data);
	}
 
	function tambah_user(){
		$this->load->view('v_admin_data_tambah_user');
	}

	function tambah_customer(){
		$this->load->view('v_admin_data_tambah_customer');
	}

	function tambah_reservation(){
		$this->load->view('v_admin_data_tambah_reservation');
	}

	function tambah_rute(){
		$this->load->view('v_admin_data_tambah_rute');
	}
	
	function tambah_transportation(){
		$this->load->view('v_admin_data_tambah_transportation');
	}

	function tambah_transportation_type(){
		$this->load->view('v_admin_data_tambah_transportation_type');
	}

	function tambah_aksi(){
	
		$fullname = $this->input->post('fullname');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$data = array(
			'fullname' => $fullname,
			'username' => $username,
			'password' => base64_encode($password),
			'level' => $level
		);
 
		$this->m_data->input_data($data,'user');
		redirect('admin/');
	}

	function tambah_aksi_customer(){
	
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender');
		$data = array(
			'name' => $name,
			'address' => $address,
			'phone' => $phone,
			'gender' => $gender
		);
 
		$this->m_data->input_data($data,'customer');
		redirect('admin/');
	}

	function tambah_aksi_reservation(){
	
		$reservation_id = $this->input->post('reservation_id');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender');
		$data = array(
			'reservation_id' => $reservation_id,
			'address' => $address,
			'phone' => $phone,
			'gender' => $gender
		);
 
		$this->m_data->input_data($data,'customer');
		redirect('admin/');
	}

	function tambah_aksi_rute(){
	
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender');
		$data = array(
			'name' => $name,
			'address' => $address,
			'phone' => $phone,
			'gender' => $gender
		);
 
		$this->m_data->input_data($data,'customer');
		redirect('admin/');
	}

	function tambah_aksi_transportation(){
	
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender');
		$data = array(
			'name' => $name,
			'address' => $address,
			'phone' => $phone,
			'gender' => $gender
		);
 
		$this->m_data->input_data($data,'customer');
		redirect('admin/');
	}

	function tambah_aksi_transportation_type(){
	
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender');
		$data = array(
			'name' => $name,
			'address' => $address,
			'phone' => $phone,
			'gender' => $gender
		);
 
		$this->m_data->input_data($data,'customer');
		redirect('admin/');
	}

	function edit($id){
	$where = array('id' => $id);
	$data['user'] = $this->m_data->edit_data($where,'user')->result();
	$this->load->view('v_admin_data_edit_user',$data);
	}
 
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('admin/');
	}

	function update(){
	$id = $this->input->post('id');
	$fullname = $this->input->post('fullname');
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$level = $this->input->post('level');
	$data = array(
		'fullname' => $fullname,
		'username' => $username,
		'password' => base64_encode($password),
		'level' => $level
	);
 
	$where = array(
		'id' => $id
	);

	$this->m_data->update_data($where,$data,'user');
	redirect('admin/');
	
	// $query = $this->db->query('UPDATE `user` SET `username` = "'.$username.'", `password` = "'.$password.'", `fullname` = "'.$fullname.'", `level` = "'.$level.'" WHERE `user`.`id` = "'.$id.'"');
	// 	if ($query) {
	// 		echo redirect('admin/');
	// 	}
	}
}