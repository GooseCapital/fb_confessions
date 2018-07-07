<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_user');
		$this->load->model('Cfs');
		$this->load->config('page');
	}
	//load view
	public function index()
	{
		$data['title'] = 'Login page';
		$this->load->view('/admin/login', $data, FALSE);
	}

	//kiem tra dung id chua 
	public function check_login()
	{
		$user = $this->facebook->request('get', 'me?fields=id,name,picture,email');
		if(!isset($user['error']))
		{
			
			$id = $user['id'];
			$email = $user['email'];
			if($this->login_user->check_login($email)){
				//luu session can dung
				$data_sessions = array(
					
					'avatar' => $user['picture']['data']['url'],
					'name' => $user['name'],
					'id_fb' => $id,
					'chucvu' => $this->login_user->get_chucvu($id)[0]->chucvu,
					'nickname' => $this->login_user->get_nickname_admin($id)[0]->nickname,
					
				);
				echo 'Successfully logged in awaiting processing';
				$this->session->set_userdata('pageinfo', $data_sessions);
				redirect(base_url('admin/trang_chu'),'refresh');
				
			}else{
				$this->facebook->destroy_session();
				echo $user['id'];
				echo '<br>ID không có trong hệ thống vui lòng liên hệ admin';
			}
		}else
		{
			$this->facebook->destroy_session();
			redirect(base_url('admin/login'),'refresh');
		}
	}
	public function logout()
	{
		$this->facebook->destroy_session();
		redirect(base_url('admin/login'),'refresh');
	}

}

/* End of file check_login.php */
/* Location: ./application/controllers/admin/check_login.php */