<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Model {
	private $table ='login_user';
	public function check_login($id){
		$this->db->where('id_fb', $id);
		$query = $this->db->get($this->table);
		if($query->num_rows()==1){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
	

}

/* End of file check_login.php */
/* Location: ./application/models/check_login.php */