<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->library('encryption');
		if ($this->session->userdata('status')!='login') {
			redirect(base_url('login'));
		}
	 }
	public function index()
	{
		$data['user']= $this->m_data->tampil_data()->result();
		$this->load->view('v_admin',$data);
	}
	public function user()
	{
		$data['user']= $this->m_data->tampil_data()->result();
		$this->load->view('v_admin_data_user',$data);
	}
	public function customer()
	{
		$data['customer']= $this->m_data->tampil_data_customer()->result();
		$this->load->view('v_admin_data_customer',$data);
	}
	public function reservation()
	{
		$data['reservation']= $this->m_data->tampil_data_reservation()->result();
		$this->load->view('v_admin_data_reservation',$data);
	}
	public function rute()
	{
		$data['rute']= $this->m_data->tampil_data_rute()->result();
		$this->load->view('v_admin_data_rute',$data);
	}
	public function transportation()
	{
		$data['transportation']= $this->m_data->tampil_data_transportation()->result();
		$this->load->view('v_admin_data_transportation',$data);
	}
	public function transportation_type()
	{
		$data['transportation_type']= $this->m_data->tampil_data_transportation_type()->result();
		$this->load->view('v_admin_data_transportation_type',$data);
	}
}
