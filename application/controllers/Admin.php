<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$this->load->view('v_admin');
	}

	function rute(){
		$data['rute']=$this->m_admin->tampil();
		$this->load->view('v_rute', $data);
	}

	function tambahrute(){
		$this->load->view('v_tambahrute');
	}

	function editrute(){
		$this->load->view('v_editrute');
	}


}