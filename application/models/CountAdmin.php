<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class countAdmin extends CI_Model {
	public $table = 'login_user';
	public function count_admin(){
		return $this->db->count_all_results($this->table);
  		 
	}
	public function upload_stt($id_fb, $total){
		$this->db->set('so_cfs', 'so_cfs+'.$total,FALSE);
		$this->db->where('id_fb', $id_fb);
		$this->db->update('login_user');
	}

}

/* End of file Admin.php */
/* Location: ./application/models/Admin.php */