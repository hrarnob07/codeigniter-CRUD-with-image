<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	
	public function admin_login()
	{
		$email_address=$this->input->post('email_address',true);
		$password=$this->input->post('password',true);
		$this->load->model('admin_model');
		$result=$this->admin_model->admin_info($email_address,$password);
		$data=array();
		if($result)
		{
		
			$data['admin_id']=$result->admin_id;
			$data['admin_name']=$result->admin_name;
			$this->session->set_userdata($data);
      		redirect('dashbord');
      		// redirect('Admin/dashbord', 'refresh');
		}
		else
		{
			$data['message']="Invalied Email address or password ..!!!";
			$this->session->set_userdata($data);
			redirect('admin');
		}

		
	}
	public function dashbord()
	{
		 

		$data=array();
		$data['admin_content']=$this->load->view('admin/admin_middle','',true);
		$this->load->view('dashbord',$data);
	}
	public function logout()
	{
		 
		$this->session->unset_userdata($data);
		$this->session->unset_userdata($data);
			$data=array();
			$data['logout']="Log out successfully";
			$this->session->set_userdata($data);

		
		    redirect('admin');
	}

	public function add_student()
	{   
		$data=array();
		$data['admin_content']=$this->load->view('admin/add_student','',true);
		$this->load->view('dashbord',$data);
	
	}
	
	
	public function edit_admin()
	{   
		$data=array();
		$data['admin_content']=$this->load->view('admin/edit_admin','',true);
		$this->load->view('dashbord',$data);
	
	}
	public function backend()
	{   
		
		$this->load->view('admin/admin_login');
	
	}
	public function save_student_data()
	{   
		$this->load->model('admin_model');
		$this->admin_model->save_student_info();
		$sdata=array();
		$sdata['message']="data insert successfully";
		$this->session->set_userdata($sdata);
		redirect('add_student');
	}

	public function manage_student()
	{   
		$data=array();
		$this->load->model('admin_model');
		$data['all_student_info']=$this->admin_model->all_student_info();
		$data['admin_content']=$this->load->view('admin/manage_student',$data,true);
		$this->load->view('dashbord',$data);
	
	}
	public function edit_student_info($student_id)
	{   
		$data=array();
		 $this->load->model('admin_model');
		 $data['all_student_for_update']=$this->admin_model->all_student_for_update($student_id);
		$data['admin_content']=$this->load->view('admin/edite_student_info',$data,true);
		$this->load->view('admin/edite_student_info',$data);
	
	}
	public function update_student_data()
	{   
		$data=array();
		 $this->load->model('admin_model');
		 $this->admin_model->update_student_info();
		 $data['message']="successfully updated";
		 $this->session->set_userdata($data);
		 redirect('manage_student');

		 
	}
	public function save_admin()
	{   
		$this->load->model('admin_model');
		$this->admin_model->save_admin_info();
		$sdata=array();
		$sdata['message']="data insert successfully";
		$this->session->set_userdata($sdata);
		redirect('add_student');

		 
	}

	public function delete_student_info($student_id)
	{   
		
		 $this->load->model('admin_model');
		 $this->admin_model->delete_student_info($student_id);
          $data['message']="successfully delete";
		 $this->session->set_userdata($data);
		redirect('edit_admin');

		 
	}
	public function manage_admin()
	{   
		
		 $data=array();
		$this->load->model('admin_model');
		$data['manage_all_admin_info']=$this->admin_model->manage_all_admin_info();
		$data['admin_content']=$this->load->view('admin/manage_admin',$data,true);
		$this->load->view('dashbord',$data);

		 
	}
}