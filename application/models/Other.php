<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Other extends CI_Model {
	private $table = 'login_user';
	public function get_chucvu($id){
		$query = $this->db->select('chucvu')
                ->where('id_fb', $id)
                ->get($this->table);
		return $query->result();
	}
	public function list_admin(){
		$query = $this->db->select('*')
				->get($this->table);
		return $query->result();
	}
	public function get_nickname_admin($id)
	{
		$query = $this->db->select('nickname')
                ->where('id_fb', $id)
                ->get($this->table);
		return $query->result();
	}
	public function up_cfs_to_db($mess){
		$data  = array(
			'cfs' => $mess, 
			'stt' => '1'
		);
		$this->db->insert('new_cfs', $data);
	}
}

/* End of file Admin.php */
/* Location: ./application/models/Admin.php */