<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data = array();
        $data['view'] = 'site/home/index';       
		$this->load->view('site/app', $data);
	}
}
