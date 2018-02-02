<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->model('m_data');
		$this->load->helper('url');

	}

	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('admin',$data);
	}

	function tambah(){
		$this->load->view('v_input');
	}

	function tambah_aksi(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$fullname = $this->input->post('fullname');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$data = array(
			'id' => $id,
			'username' => $username,
			'fullname' => $fullname,
			'password' => $password,
			'level' => $level
			);
		$this->m_data->input_data($data,'user');
		redirect('admin/index');
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('admin/index');
	}
	function edit($id){
	$where = array('id' => $id);
	$data['user'] = $this->m_data->edit_data($where,'user')->result();
	$this->load->view('v_edit',$data);
	}
	function update(){
	$id = $this->input->post('id');
	$username = $this->input->post('username');
	$fullname = $this->input->post('fullname');
	$password = $this->input->post('password');
	$level = $this->input->post('level');

	$data = array(
		'username' => $username,
		'fullname' => $fullname,
		'password' => $password,
		'level' => $level
	);

	$where = array(
		'id' => $id
	);

	$this->m_data->update_data($where,$data,'user');
	redirect('admin/index');
	}
	
}
