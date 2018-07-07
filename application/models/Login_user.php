<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Model {
	private $table ='login_user';
	public function check_login($email){
		$this->db->where('email', $email);
		$query = $this->db->get($this->table);
		if($query->num_rows()==1){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	public function count_admin(){
		return $this->db->count_all_results($this->table);
  		 
	}

	public function upload_stt($id_fb, $total){
		$this->db->set('so_cfs', 'so_cfs+'.$total,FALSE);
		$this->db->where('id_fb', $id_fb);
		$this->db->update($this->table);
	}

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

	public function kiem_tra_email($email)  
      {  
           $this->db->where('email', $email);  
           $query = $this->db->get($this->table);  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;  
           }  
      } 

    public function add_new_admin($name,$email,$nickname)
    {
    	$query = $this->db->where('email', $email)
    			->get($this->table);
    	if($query->num_rows() == 0)
    	{
	    		$data = array(
	    		'name' => $name ,
	    		'email' => $email,
	    		'nickname' => $nickname,
	    		'so_cfs' => '0',
    		);
    		$this->db->insert($this->table, $data);
    	}
    	
    } 
}

/* End of file Login_user.php */
/* Location: ./application/models/Login_user.php */