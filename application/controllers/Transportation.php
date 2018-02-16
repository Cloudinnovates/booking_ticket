<?php

class Transportation extends CI_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model('m_transportation');
		$this->load->helper('url');
	}

	public function pencarian(){
		$from = $this->input->get('from');
		$to = $this->input->get('to');
		$date = $this->input->get('depart');
		$price = $this->input->get('price');

		$data['hasil'] = $this->m_transportation->pencarian($from, $to, $date, $price);
		$this->load->view('v_pencarian', $data);
	}
}