<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('view');
	}

	public function show()
	{
		$this->load->model('Customer');
		$data=$this->Customer->getdata();
		print_r($data);
	}
}
