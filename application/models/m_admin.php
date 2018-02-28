<?php 
class m_admin extends CI_Model{
	function tampil(){
		return $this->db->get('rute')->result();
	}

	function tampil_user(){
		return $this->db->get('user')->result();
	}

	function tampil_transportation(){
		return $this->db->get('transportation')->result();	
	}

	function tampil_costumer(){
		return $this->db->get('costumer')->result();	
	}

	function tampil_reservation(){
		return $this->db->get('reservation')->result();	
	}

	function konfirmasi($kode){
		$this->db->set('confirm', '1');
		$this->db->where('reservation_code', $kode);
		return $this->db->update('reservation');
	}
}
?>