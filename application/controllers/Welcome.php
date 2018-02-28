<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent:: __construct();

		$this->load->model('m_crud');
		$this->load->helper(array('url', 'string'));
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

	public function step1($idrute)
	{
		$data = new stdClass();
		$where = array(
			'ruteid' => $idrute
		);
		$data->flight = $this->m_crud->search_data($where, 'rute')->result();
		$this->load->view('v_step1', $data);
	}

	public function step2()
	{
		$data = new stdClass();
		$ruteid = $this->input->post('ruteid');

		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender');
		$email = $this->input->post('email');

		$where = array(
			'name' => $name,
			'address' => $address,
			'phone' => $phone,
			'gender' => $gender,
			'email' => $email
		);

		$this->m_crud->input_data($where, 'costumer');

		$custid = $this->m_crud->ambil_data('id', 'costumer', array('name'=>$name, 'email'=>$email))->row_array();

		$data->custid = $custid['id'];

		$transid = $this->m_crud->ambil_data('transportation_id', 'rute', array('ruteid'=>$ruteid))->row_array();
		$where = array(
			'id' => $transid['transportation_id']
		);

		$data->ruteid = $ruteid;
		$data->flight = $this->m_crud->ambil_data('seat_qty', 'transportation', $where)->result();

		$this->load->view('v_step2', $data);
	}

	function step3(){
		$ruteid = $this->input->post('ruteid');
		$custid = $this->input->post('custid');

		$datarute = $this->m_crud->ambil_data('*', 'rute', array('ruteid'=>$ruteid))->row_array();

		$dateresat = strtotime($datarute['depart_on']);

		$rescode = random_string('alnum', 6);
		$resat = gmdate('Y', $dateresat).'/'.gmdate('m', $dateresat).'/'.gmdate('d', $dateresat);
		$resdate = date('Y-m-d');
		$seat = $this->input->post('seat');
		$userid = 0;

		$datareservasi = array(
			'reservation_code' => $rescode,
			'reservation_at' => $resat,
			'reservation_date' => $resdate,
			'seat_code' => $seat,
			'costumer_id' => $custid,
			'rute_id' => $ruteid,
			'user_id' => $userid
		);

		$this->m_crud->tambah_reservasi($datareservasi);

		$data['rescode'] = $rescode;
		// $data['rescode'] = "Asdasd";
		$this->load->view('v_step3', $data);
		}

		public function bukti()
		{
			$this->load->view('v_bukti');
		}

		public function do_upload()
        {
                $config['upload_path']          = '././uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('buktifile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('v_bukti', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('v_bukti', $data);
                }
        }

	}
