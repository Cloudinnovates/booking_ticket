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
}
?>