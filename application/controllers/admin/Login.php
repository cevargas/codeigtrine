<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data = array();
        $data['view'] = 'admin/login/index';       
		$this->load->view('admin/app', $data);
	}
}
