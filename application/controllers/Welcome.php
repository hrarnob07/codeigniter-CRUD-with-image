<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('admin/admin_login');
	}

	public function dashbord()
	{

		$this->load->view('dashbord');
	}

	public function admin_login()
	{
		$this->load->view('dashbord');
	}
}
