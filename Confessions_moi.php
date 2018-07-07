<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Confessions_moi extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cfs');

		$this->load->model('login_user');
	}

	//load view
	public function index()
	{
		$data = $this->session->userdata('pageinfo');
		$data['title'] = 'Cfs mới';
		$data['new_cfs'] = $this->cfs->get_new_cfs();
		$this->load->view('admin/new_cfs', $data, FALSE);
	}


	//up confessions len page
	public function up_cfs_len_page()
	{
		$data = $this->session->userdata('pageinfo');
		$id = $this->input->post('id');
		$this->cfs->del_cfs($id);
		$mess = $this->input->post('mess');
		
		
		$cfs_data = $this->cfs->get_cfs($id);

		$nickname =$data['nickname'];
		$id_fb = $data['id_fb'];
		
		
		
		$newmess = '#'.$id.'
			'.$cfs_data[0]->cfs.'
			---
			'.
			$mess.'
			'.$nickname;	


		$pages = $this->facebook->request('GET',$this->config->item('page_id').'?fields=access_token');
		print_r($pages);
		$upload = $this->facebook->request('POST',$this->config->item('page_id').'/feed',array('message' => $newmess),$pages['access_token']);
	}

	public function xoa_cfs()
	{
		$id = $this->input->post('id');
		$this->cfs->del_cfs($id);
	}

	//cap nhat so cfs da dang
	public function capnhat_so_cfs()
	{
		$total = $this->input->post('total');
		$data = $this->session->userdata('pageinfo');
		$id_fb = $data['id_fb'];
		$this->login_user->upload_stt($id_fb, $total);
	}
}

/* End of file New_cfs.php */
/* Location: ./application/controllers/admin/New_cfs.php */