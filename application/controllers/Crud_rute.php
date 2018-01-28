<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_rute extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model('crud_m');
		$this->load->helper('url');
	}

	function tampil(){
		$data['rute'] = $this->crud_m->tampil_data()->result();
		$this->load->view('tampil', $data);
	}

	function index() {
		$this->load->view('v_rute');
	}

	function tambah_aksi() {
		$from = $this->input->post('from');
		$to = $this->input->post('to');
		$date = $this->input->post('depart');
		$price = $this->input->post('price');

		$data = array(
				'rute_from' => $from,
				'rute_to' => $to,
				'depart_on' => $date,
				'price' => $price
		);
		$this->crud_m->input_data($data, 'rute');
		redirect('crud_rute/index');
	}

	function hapus($id){
		$where = array('ruteid' => $id);
		$this->crud_m->hapus_record($where, 'rute');
		redirect('Crud_rute/tampil');
	}

	function edit_rute($id){
		$where = array ('ruteid' => $id);
		$data['rute'] = $this->crud_m->edit_datarute($where, 'rute')->result();
		$this->load->view('v_editrute', $data);
	}

	function update_rute(){
		$ruteid = $this->input->post('ruteid');
		$from = $this->input->post('from');
		$to = $this->input->post('to');
		$depart_on = $this->input->post('depart');
		$price = $this->input->post('price');
		$data = array(
			'rute_from' => $from,
			'rute_to' => $to,
			'depart_on' => $depart_on,
			'price' => $price
		);
		$where = array(
			'ruteid' => $ruteid
		);
		$this->crud_m->update_datarute($where, $data, 'rute');
		redirect('Crud_rute/tampil');
	}

}

?>