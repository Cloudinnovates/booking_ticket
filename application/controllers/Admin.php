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

	function user(){
		$data['user']=$this->m_admin->tampil_user();
		$this->load->view('v_user', $data);
	}

	function tambahuser(){
		$this->load->view('v_tambahuser');
	}

	function transportation(){
		$data['transportation']=$this->m_admin->tampil_transportation();
		$this->load->view('v_transportation', $data);
	}

	function tambahtransportation(){
		$this->load->view('v_tambahtransportation');
	}

	function costumer(){
		$data['costumer'] = $this->m_admin->tampil_costumer();
		$this->load->view('v_costumer', $data);
	}

	function reservation(){
		$data['reservation'] = $this->m_admin->tampil_reservation();
		$this->load->view('v_reservation', $data);
	}

	function konfirmasi($kode)
	{
		$this->m_admin->konfirmasi($kode);
		redirect(base_url('admin/reservation'));
	}


}