<?php

class Login extends MX_Controller {
	
	function index()
	{
		$data['main_content'] = 'login_form';
		$this->load->view('includes/template_login', $data);		
	}
	
	function validate_credentials()
	{		
		$this->load->model('login_model');
		$query = $this->login_model->validate();
	
		if($query!= FALSE) // if the user's credentials validated...
		{
		 $user = $query;
			$data = array(
				'email' => $this->input->post('email'),
				'session_userid'=> $user['id'],
				'session_username'=> $user['username'],
				'login_time'=>time(),
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('admin/dashboard');
		}
		else // incorrect username or password
		{
                   
			$this->index();
		}
	}	
	
	function signup()
	{
		$data['main_content'] = 'signup_form';
		$this->load->view('includes/template', $data);
	}
	
	
	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
				
			redirect('login');
		}		
	}	
	
	function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}

}