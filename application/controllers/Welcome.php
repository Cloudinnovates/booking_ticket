<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent:: __construct();

		$this->load->model('m_crud');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function search()
	{
		$data = new stdClass();
		$from = $this->input->get('from');
		$to = $this->input->get('to');
		$where = array(
			'rute_from' => $from,
			'rute_to' => $to
			);
		$table = "rute";
		$data->flight = $this->m_crud->search_data($where, $table)->result();
		$this->load->view('v_flightlist', $data);
	}

	public function step1($idrute, $idtrans)
	{
		$this->load->view('v_step1');
	}

}
