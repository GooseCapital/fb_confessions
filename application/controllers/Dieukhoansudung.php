<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dieukhoansudung extends CI_Controller {

	public function index()
	{
		$data['title'] = 'điều khoản sử dụng';
		$this->load->view('Dieukhoansudung', $data, FALSE);
	}

}

/* End of file Dieu-khoan-su-dung.php */
/* Location: ./application/controllers/Dieu-khoan-su-dung.php */