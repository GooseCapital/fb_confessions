<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Getcfs extends CI_Model {
	private $table = 'new_cfs';
	public function get_new_cfs(){
		$query = $this->db->select('*')
                ->where('stt', '1')
                ->get($this->table);
		return $query->result();
	}
	
	public function get_cfs($id)
	{
		$query = $this->db->where('id',$id)
				->get($this->table);
		return $query->result();
	}
	public function del_cfs($id)
	{	
		$this->db->set('stt', '0', FALSE);
		$this->db->where('id', $id);
		$this->db->update('new_cfs'); 

	}
	
}

/* End of file Getcfs.php */
/* Location: ./application/models/Getcfs.php */