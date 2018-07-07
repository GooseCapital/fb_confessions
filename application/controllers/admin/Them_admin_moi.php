<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Them_admin_moi extends MY_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('login_user');
  }
	public function index()
	{
		$data = $this->session->userdata('pageinfo');
		$data['title'] = 'Thêm mới admin';
		$this->load->view('/admin/add_new',$data);
		
	}
  public function them_admin()
  {
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $nickname = $this->input->post('nickname');
    $this->login_user->add_new_admin($name,$email,$nickname);
    echo 'done';

  }
	public function check_email_avalibility()  
      {  
           if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))  
           {  
                echo '1';  
           }  
           else  
           {  
                $this->load->model("login_user");  
                if($this->login_user->kiem_tra_email($_POST["email"]))  
                {  
                     echo '2';  
                }  
                else  
                {  
                     echo '3';  
                }  
           }  
      }       

}

/* End of file Them_admin_moi.php */
/* Location: ./application/controllers/admin/Them_admin_moi.php */