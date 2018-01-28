<?php 
class m_admin extends CI_Model{
	function tampil(){
		return $this->db->get('rute')->result();
	}
}
?>