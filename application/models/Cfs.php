<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cfs extends CI_Model {
	private $table = 'new_cfs';
	public function count_new_cfs(){
		$this->db->where('stt=', 1);
		$query = $this->db->get($this->table);
		return $query->num_rows();

	}
	
	public function count_all_cfs(){
		return $this->db->count_all_results($this->table);
	}

	public function up_cfs_to_db($mess){
		$data  = array(
			'cfs' => $mess, 
			'stt' => '1'
		);
		$this->db->insert('new_cfs', $data);
	}
	
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

/* End of file New_cfs.php */
/* Location: ./application/models/New_cfs.php */