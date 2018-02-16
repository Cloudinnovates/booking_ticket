<?php 
class m_transportation extends CI_Model{

	public function pencarian($from, $to, $date, $price){
		$this->db->like('rute_from', $from);
		$this->db->like('rute_to', $to);
		$this->db->like('depart_on', $date);
		$this->db->like('price', $price);
		return $this->db->get('rute')->result();
	}
} 