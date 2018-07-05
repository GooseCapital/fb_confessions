<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Count_cfs extends CI_Model {
	private $table = 'new_cfs';
	public function count_new_cfs(){
		$this->db->where('stt=', 1);
		$query = $this->db->get($this->table);
		return $query->num_rows();

	}
	public function count_all_cfs(){
		return $this->db->count_all_results($this->table);
  		 
	}
	
}

/* End of file Count_cfs.php */
/* Location: ./application/models/Count_cfs.php */