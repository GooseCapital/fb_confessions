<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trang_chu extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cfs');
		$this->load->model('login_user');
				$this->load->config('page');
	}
	public function index()
	{
		
		$data = $this->session->userdata('pageinfo');
		$data['total_admin'] = $this->login_user->count_admin(); 
		$data['total_new_cfs'] = $this->cfs->count_new_cfs();
		$data['fan_count'] = $this->facebook->request('get',$this->config->item('page_id').'?fields=access_token,fan_count')['fan_count']; 
		$data['title'] = 'Trang chủ';
		$data['total_cfs'] = $this->cfs->count_all_cfs();
		$data['members'] = $this->login_user->list_admin();
		$this->load->view('/admin/trangchu', $data);
	}

}

/* End of file Trangchu.php */
/* Location: ./application/controllers/admin/Trangchu.php */