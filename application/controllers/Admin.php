<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login');
		$this->load->model('countAdmin');
		$this->load->model('Count_cfs');
		$this->load->model('Other');
		$this->load->model('Getcfs');
		$this->load->config('page');
	}
	public function index()
	{
		$user = $this->facebook->request('get', 'me?fields=id,name,picture,email');
		if(!isset($user['error']))
		{
			
			$id = $user['id'];
			$email = $user['email'];
			if($this->login->check_login($id)){
				$data_sessions = array(
					'total_admin' => $this->countAdmin->count_admin(), 
					'total_new_cfs' => $this->Count_cfs->count_new_cfs(),
					'avatar' => $user['picture']['data']['url'],
					'name' => $user['name'],
					'fan_count' => $this->facebook->request('get',$this->config->item('page_id').'?fields=access_token,fan_count')['fan_count'],
					'chucvu' => $this->Other->get_chucvu($id)[0]->chucvu,
					'nickname' => $this->Other->get_nickname_admin($id)[0]->nickname,
					'members' => $this->Other->list_admin(),

				);
				echo 'Successfully logged in awaiting processing';
				$this->session->set_userdata('pageinfo', $data_sessions);
				redirect(base_url('admin/trangchu'),'refresh');
				
			}else{
				echo $user['id'];

			}
		}else
		{
			$this->facebook->destroy_session();
			redirect(base_url('admin/login'),'refresh');
		}
		
	}
	public function trangchu()
	{
		$data = $this->session->userdata('pageinfo');
		$data['title'] = 'Trang chủ';
		$data['total_cfs'] = $this->Count_cfs->count_all_cfs();
		$this->load->view('/admin/trangchu', $data);
	}
	public function new_cfs()
	{
		$data = $this->session->userdata('pageinfo');
		$data['title'] = 'Cfs mới';
		$data['new_cfs'] = $this->Getcfs->get_new_cfs();
		$this->load->view('admin/new_cfs', $data, FALSE);
	}
	public function upload()
	{
		$data = $this->session->userdata('pageinfo');
		$id = $this->input->post('id');
		$this->Getcfs->del_cfs($id);
		$mess = $this->input->post('mess');
		
		
		$cfs_data = $this->Getcfs->get_cfs($id);

		$nickname =$data['members'][0]->nickname;
		$id_fb = $data['members'][0]->id_fb;
		
		
		
		$newmess = '#'.$id.'
			'.$cfs_data[0]->cfs.'
			---
			'.
			$mess.'
			'.$nickname;	


		$pages = $this->facebook->request('Get',$this->config->item('page_id').'?fields=access_token');
		echo $pages['access_token'];
		$upload = $this->facebook->request('POST',$this->config->item('page_id').'/feed',array('message' => $newmess),$pages['access_token']);
		


	}
	public function upstt()
	{
		$total = $this->input->post('total');
		$data = $this->session->userdata('pageinfo');
		$id_fb = $data['members'][0]->id_fb;
		$this->countAdmin->upload_stt($id_fb, $total);

	}
	public function add_new()
	{
		$data = $this->session->userdata('pageinfo');
		$data['title'] = 'Thêm mới admin';
		$this->load->view('/admin/add_new',$data);
		
	}
	public function del_cfs()
	{
		$id = $this->input->post('id');
		$this->Getcfs->del_cfs($id);
	} 
    public function check_email_avalibility()  
      {  
           if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))  
           {  
                echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Invalid Email</span></label>';  
           }  
           else  
           {  
                $this->load->model("mail");  
                if($this->mail->is_email_available($_POST["email"]))  
                {  
                     echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Email Already register</label>';  
                }  
                else  
                {  
                     echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Email Available</label>';  
                }  
           }  
      }       




	public function login()
	{
		$data['title'] = 'Login page';
		$this->load->view('/admin/login', $data, FALSE);
	}
	public function logout()
	{
		$this->facebook->destroy_session();
		redirect(base_url('admin/login'),'refresh');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */