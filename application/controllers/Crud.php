<?php

class Crud extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model('m_crud');
		$this->load->helper('url');
	}

	function tampil(){
		$data['rute'] = $this->m_crud->tampil_data()->result();
		$this->load->view('tampil', $data);
	}

	function index() {
		// $this->load->view('v_rute');
	}
	//DATA RUTE
	function tambah_aksi() {
		$from = $this->input->post('from');
		$to = $this->input->post('to');
		$date = $this->input->post('depart');
		$arrive = $this->input->post('arrive');
		$trans_id = $this->input->post('trans_id');
		$price = $this->input->post('price');

		$data = array(
				'rute_from' => $from,
				'rute_to' => $to,
				'depart_on' => $date,
				'arrive_at' => $arrive,
				'transportation_id' => $trans_id,
				'price' => $price
		);
		$this->m_crud->input_data($data, 'rute');
		redirect('admin/rute');
	}

	function hapus($id){
		$where = array('ruteid' => $id);
		$this->m_crud->hapus_data($where, 'rute');
		redirect('admin/rute');
	}

	function edit_rute($id){
		$where = array ('ruteid' => $id);
		$data['rute'] = $this->m_crud->edit_data($where, 'rute')->result();
		$this->load->view('v_editrute', $data);
	}

	function update_rute(){
		$id = $this->input->post('id');
		$from = $this->input->post('from');
		$to = $this->input->post('to');
		$depart = $this->input->post('depart');
		$arrive = $this->input->post('arrive');
		$trans_id = $this->input->post('trans_id');
		$price = $this->input->post('price');
		$data = array(
			'rute_from' => $from,
			'rute_to' => $to,
			'depart_on' => $depart,
			'arrive_at' => $arrive,
			'transportation_id' => $trans_id,
			'price' => $price
		);
		$where = array(
			'ruteid' => $id
		);
		$this->m_crud->update_data($where, $data, 'rute');
		redirect('admin/rute');
	}



	//DATA USER

	function tampil_user(){
		$data['user'] = $this->m_crud->tampil_data_user()->result();
		$this->load->view('v_user', $data);
	}

	function tambah_aksi_user() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$level = $this->input->post('level');

		$data = array(
				'username' => $username,
				'password' => $password,
				'fullname' => $fullname,
				'level' => $level
		);
		$this->m_crud->input_data_user($data, 'user');
		redirect('admin/user');
	}

	function hapus_user($id){
		$where = array('id' => $id);
		$this->m_crud->hapus_data_user($where, 'user');
		redirect('admin/user');
	}

	function edit_user($id){
		$where = array ('id' => $id);
		$data['user'] = $this->m_crud->edit_data_user($where, 'user')->result();
		$this->load->view('v_edituser', $data);
	}

	function update_user(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$fullname = $this->input->post('fullname');
		$level = $this->input->post('level');
		$data = array(
			'username' => $username,
			'password' => $password,
			'fullname' => $fullname,
			'level' => $level
		);
		$where = array(
			'id' => $id
		);
		$this->m_crud->update_data_user($where, $data, 'user');
		redirect('admin/user');
	}



	//DATA TRANSPORTATION

	function tampil_transportation(){
		$data['transportation'] = $this->m_crud->tampil_data_transportation()->result();
		$this->load->view('v_transportation', $data);
	}

	function tambah_aksi_transportation() {
		$id = $this->input->post('id');
		$code = $this->input->post('code');
		$description = $this->input->post('description');
		$seat_qty = $this->input->post('seat');

		$data = array(
				'id' => $id,
				'description' => $description,
				'seat_qty' => $seat_qty
		);
		$this->m_crud->input_data_transportation($data, 'transportation');
		redirect('admin/transportation');
	}

	function hapus_transportation($id){
		$where = array('id' => $id);
		$this->m_crud->hapus_data_transportation($where, 'transportation');
		redirect('admin/transportation');
	}

	function edit_transportation($id){
		$where = array ('id' => $id);
		$data['transportation'] = $this->m_crud->edit_data_transportation($where, 'transportation')->result();
		$this->load->view('v_edittransportation', $data);
	}

	function update_transportation(){
		$id = $this->input->post('id');
		$code = $this->input->post('code');
		$description = $this->input->post('description');
		$seat_qty = $this->input->post('seat');
		$data = array(
			'id' => $id,
			'code' => $code,
			'description' => $description,
			'seat_qty' => $seat_qty
		);
		$where = array(
			'id' => $id
		);
		$this->m_crud->update_data_transportation($where, $data, 'transportation');
		redirect('admin/transportation');
	}

	

	// COSTUMER
	function tampil_costumer(){
		$data['costumer'] = $this->m_crud->tampil_data_costumer()->result();
		$this->load->view('v_costumer', $data);
	}



	// RESERVATION
	function tampil_reservation(){
		$data['reservation'] = $this->m_crud->tampil_data_reservation()->result();
		$this->load->view('v_reservation', $data);
	}
}

