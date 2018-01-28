<?php
	defined('BASEPATH') or exit('no direct access allowed');

	/**
	* 
	*/
	class Reservation extends CI_Controller{
		
		function index(){
			# code...
			$this->load->view('vReservation');

			if($this->input->post('submit')){

			}
		}
	}
