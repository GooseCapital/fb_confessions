<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlist extends CI_Controller {

	public function index()
	{
		$data['title'] = "đội ngũ admin";
		$this->load->view('adminlist', $data, FALSE);
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */