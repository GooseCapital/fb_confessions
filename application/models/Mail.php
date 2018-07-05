<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Model {

	 function is_email_available($email)  
      {  
           $this->db->where('email', $email);  
           $query = $this->db->get("login_user");  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;  
           }  
      }  

}

/* End of file Mail.php */
/* Location: ./application/models/Mail.php */