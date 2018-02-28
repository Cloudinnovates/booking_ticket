<?php 
class m_crud extends CI_Model{
	function tampil_data(){
		return $this->db->get('rute');
	}

	function input_data($data, $table) {
		$this->db->insert($table, $data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}



	function tampil_data_user(){
		return $this->db->get('user');
	}

	function input_data_user($data, $table) {
		$this->db->insert($table, $data);
	}

	function hapus_data_user($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data_user($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_user($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}




	function tampil_data_transportation(){
		return $this->db->get('transportaton');
	}

	function input_data_transportation($data, $table) {
		$this->db->insert($table, $data);
	}

	function hapus_data_transportation($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data_transportation($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_transportation($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}


	function search_data($where, $table){
		$this->db->from($table);
		$this->db->where($where);
		$this->db->join('transportation', 'rute.transportation_id = transportation.id');
		return $this->db->get();
	}

	function ambil_data($select, $from, $where){
		$this->db->select($select);
		return $this->db->get_where($from, $where);
	}

	function tambah_reservasi($where){
		return $this->db->insert('reservation', $where);
	}


	function tampil_data_costumer(){
		return $this->db->get('costumer');
	}


	function tampil_data_reservation(){
		return $this->db->get('reservation');
	}
}
